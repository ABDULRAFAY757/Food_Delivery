<!DOCTYPE html>
<html>
<head>
 <title>Add New Delivery Personnel</title>
 <!-- For Success alert that appears after deletion -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.
css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>

<style>
/* Styling the form container */
.form-container {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Styling the form inputs */
.form-container label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
}

.form-container input[type=text],
.form-container input[type=email],
.form-container select,
.form-container textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 16px;
  border: 1px solid #ddd;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 14px;
}

/* Styling the form submit button */
.form-container input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .form-container {
    max-width: 90%;
    margin-left: auto;
    margin-right: auto;
  }
}
    </style>
<body>
    <div class = "form-container">
 <h2>
 Add New Delivery Personnel
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
 <form action="{{ route ('DeliveryPersonnel.store') }}" method="post">
 @csrf
 <label for="personnel_id">Personnel_Id: &nbsp;</label>
 <input type="text" id="personnel_id" name="personnel_id" value="1"><br><br>
 <label for="personnel_name">Personnel_Name: &nbsp;</label>
 <input type="text" id="personnel_name" name="personnel_name" value="Abdul Rehman"><br><br>
 <label for="personnel_address">Personnel_Address: &nbsp;</label>
 <input type="text" id="personnel_address" name="personnel_address" value="Multan"><br><br>
 <label for="personnel_phone">Personnel_Phone: &nbsp;</label>
 <input type="text" id="personnel_phone" name="personnel_phone" value="03214567386"><br><br>
 <br><br>

<!-- For the dropdown Department-->
<label for="city">City: &nbsp;</label>
 <select id="city" name="city_id">
 @foreach($cities as $city)
<option value="{{$city->id}}">
 {{$city->city_name}}
 </option>
 @endforeach
</select>

 <input type="submit" value="Submit">
 </form>
</div>
</body>
</html>