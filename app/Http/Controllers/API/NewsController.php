<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('id','desc')->get();
        return response()->json([
            'news'=>$news,
            'status'=> true,
        ]);
    }
}
