<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;
use App\Models\RiskAssessment;
use Illuminate\Support\Facades\Log;

class RiskFactorController extends Controller
{
    public function calculateRisk(Request $request){

         // Retrieve patient data from the request
         $data = $request->all();

         // Perform validation on the input data
         $validatedData = $request->validate([
             'riskscore' => 'nullable',
             'full_name' => 'required',
             'town' => 'required',
             'age' => 'required|min:0',
             'gender' => 'required|in:Male,Female',
             'hemoglobin' => 'required|min:0',
             'pain_episodes' => 'nullable|min:0', // Add validation rule for pain episodes
             'complications' => 'nullable|min:0', // Add validation rule for complications
             'medication_use' => 'nullable|min:0', // Add validation rule for medication use
             // Add more validation rules for other input variables
         ]);


         // Calculate risk score based on patient data
         $riskScore = $this->calculateRiskScore($validatedData);

         $validatedData['riskscore'] = $riskScore;
         RiskAssessment::create($validatedData);

         $username = 'fracturedwifi'; // use 'sandbox' for development in the test environment
         $apiKey   = 'atsk_5ebcf111accec36cab45a6855ff345335f9046f0aeb3596f93aeec3767cd507f0f14e209'; // use your sandbox app API key for development in the test environment
         $AT       = new AfricasTalking($username, $apiKey);

         // Get one of the services
         $sms      = $AT->sms();
         $fetch = $sms->fetchMessages();
         // Use the service
         $result   = $sms->send([
             'to'      => '+254753651280',
             'message' => 'Your Score is '.$riskScore
         ]);



        //  Advanta SMS


         // Return the risk score as a JSON response
         return response()->json([
            'status' => true,
            'risk_score' => $riskScore
        ]);
    }

    private function calculateRiskScore($data)
    {
        // Constants for factor weights (adjust as needed)
        $ageWeight = 1.0;
        $genderWeight = 1.0;
        $hemoglobinWeight = 1.0;
        $painEpisodesWeight = 0.5;
        $complicationsWeight = 0.8;
        $medicationUseWeight = 0.7;

        // Factors based on patient data
        $ageFactor = $data['age'] > 50 ? 2 : 1;
        $genderFactor = $data['gender'] == 'Male' ? 1.5 : 1;
        $hemoglobinFactor = $data['hemoglobin'] < 7 ? 2 : 1;
        $painEpisodesFactor = $data['pain_episodes'] > 0 ? 2 : 1; // Assuming 0 indicates no pain episodes
        $complicationsFactor = $data['complications'] > 0 ? 2 : 1; // Assuming 0 indicates no complications
        $medicationUseFactor = $data['medication_use'] > 0 ? 2 : 1; // Assuming 0 indicates no medication use

        // Calculate the risk score using weighted factors
        $riskScore = (
            $ageFactor * $ageWeight +
            $genderFactor * $genderWeight +
            $hemoglobinFactor * $hemoglobinWeight +
            $painEpisodesFactor * $painEpisodesWeight +
            $complicationsFactor * $complicationsWeight +
            $medicationUseFactor * $medicationUseWeight
        );

        return $riskScore;
    }


    public function sendSms()
    {
        $data = [
            "count" => 1,
            "smslist" => [
                [
                    "partnerID" => "10840",
                    "apikey" => "68b4e362a0ebff0ea0a54f87f4383dd6",
                    "pass_type" => "plain",
                    "clientsmsid" => 1234,
                    "mobile" => "+254715873713",
                    "message" => "This is a test message 0",
                    "shortcode" => "TumainiSC",
                ]
            ]
        ];

        Log::info('Sending SMS payload:', $data);


        $response = Http::post('https://quicksms.advantasms.com/api/services/sendbulk/', $data);

        if ($response->successful()) {
            return response()->json(['status' => 'SMS sent successfully']);
        } else {
            return response()->json(['status' => 'Failed to send SMS', 'error' => $response->body()]);
        }
    }
}
