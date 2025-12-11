<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Delivery Personnel Record </title>
</head>
<style>
    /* Styling the form container */
.form-container {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
}

/* Styling the form inputs */
.form-container input[type=text],
.form-container input[type=email],
.form-container textarea {
  width: 100%;
  padding: 12px;
  margin-bottom: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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
    <div class="form-container">
    <h2> Update Delivery Personnel Record </h2>
    <form action="{{ route ('DeliveryPersonnel.update') }}" method="post">
        <!-- 
        What is CSRF attack: 
        Unauthorized commands are performed 
        on behalf of an authenticated user.
        Read detail here: https://laravel.com/docs/10.x/csrf
        -->
        <!-- To prevent the Cross-Site Request Forgery (CSRF) attack,
        MUST use @csrf with post method. -->
        @csrf
        <!-- NOTE:
             The variable $DEF has been passed from 
             the controller function searchStudentRecord() -->
        <!-- Personnel_id -->
        <label for="personnel_id">Personnel Id: &nbsp;</label>
        <input type="text" id="personnel_id" name="std_personnel_id" value="{{$DEF->personnel_id}}"><br><br>
        
        <!-- Name -->
        <label for="personnel_name">Personnel Name: &nbsp;</label>
        <input type="text" id="personnel_name" name="std_personnel_name" value="{{$DEF->personnel_name}}"><br><br>
        
        <!-- Address-->
        <label for="personnel_address">Personnel Address: &nbsp;</label>
        <input type="text" id="personnel_address" name="std_personnel_address" value="{{$DEF->personnel_address}}"><br><br>

        <!-- Phone -->
        <label for="personnel_phone">Personnel Phone : &nbsp;</label>
        <input type="text" id="personnel_phone" name="std_personnel_phone" value="{{$DEF->personnel_phone}}"><br><br>

        <br><br>
          <!-- Update Button -->
        <input type="submit" name="update_std_data" value="Update"><br><br>

        <!-- Hidden textfield to store the Primary Key -->
        <input type="hidden" id="personnel_id" name="std_id" value="{{$DEF->personnel_id}}"><br><br>
    </form>
</div>
</body>
</html>