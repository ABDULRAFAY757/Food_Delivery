<!DOCTYPE html>
<html>
<head>
 <title>Add New City</title>
 <!-- For Success alert that appears after deletion -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
    body {
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .page-title {
        background-color: DodgerBlue;
        color: #ffffff;
        text-align: center;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
 </style>
</head>
<body>
 <div class="container">
     <h2 class="page-title">
         Add New City
     </h2>
     <!-- For Redirecting With Flashed Session Data when 'Submit' button -->
     <!-- is pressed in the 'create.blade.php' view which calls the relevant -->
     <!-- function 'store' in the StudentController and then this -->
     <!-- view, 'create.blade.php' is again called -->
     <!-- START -->
     @if (session('status'))
     <div class="alert alert-success alert-dismissible">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         {{ session('status') }}
     </div>
     @endif
     <!-- END -->
     <form action="{{ route ('city.store') }}" method="post">
         @csrf
         <div class="form-group">
             <label for="city_code">City ID:</label>
             <input type="text" id="city_code" name="city_code" class="form-control" value="1">
         </div>
         <div class="form-group">
             <label for="city_name">City Name:</label>
             <input type="text" id="city_name" name="city_name" class="form-control" value="Lahore">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
 </div>
</body>
</html>
