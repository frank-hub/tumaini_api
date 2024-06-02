<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2>Risk Assessment Algorithm Test</h2>
    <form method="POST" action="{{url('riskscore')}}">
        @csrf
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" name="age" placeholder="Enter your age">
                  </div>
                  <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select class="form-control" name="gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="hemoglobin">Hemoglobin Level:</label>
                    <input type="number" class="form-control" name="hemoglobin" placeholder="Enter hemoglobin level">
                  </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="pain_episodes">Pain Episodes:</label>
                    <input type="number" class="form-control" name="pain_episodes" placeholder="Enter number of pain episodes">
                  </div>
                  <div class="form-group">
                    <label for="complications">Complications:</label>
                    <input type="number" class="form-control" name="complications" rows="3" placeholder="Enter any complications"></input>
                  </div>
                  <div class="form-group">
                    <label for="medication_use">Medication Use:</label>
                    <input type="number" class="form-control" name="medication_use" rows="3" placeholder="Enter medication usage"></input>
                  </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
