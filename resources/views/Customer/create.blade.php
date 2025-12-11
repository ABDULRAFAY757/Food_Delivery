<!DOCTYPE html>
<html>
<head>
 <title>Add New Customer</title>
 <!-- For Success alert that appears after deletion -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url("https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80");
    background-size: cover;
    background-position: center;
  }

  .container {
    max-width: 500px;
    padding: 20px;
    border: 1px solid black;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.8); /* Add background color with opacity */
  }

  .header {
    background-color: DodgerBlue;
    text-align: center;
    padding: 10px;
    color: white;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 20px;
    position: relative;
  }

  .input-group {
    position: relative;
  }

  .form-control {
    padding-right: 40px;
  }

  .form-icon {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    color: #ccc;
  }

  .image-preview {
    max-width: 100%;
    height: auto;
    margin-top: 10px;
  }

 </style>
</head>
<body>
  <div class="container">
    <h2 class="header">
      Add New Customer
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
    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="id">Customer ID:</label>
        <div class="input-group">
          <input type="text" id="id" name="id" value="" class="form-control">
          <span class="form-icon"><i class="fa fa-user"></i></span>
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <div class="input-group">
          <input type="text" id="email" name="email" value="ABDULRAFAY757@gmail.com" class="form-control">
          <span class="form-icon"><i class="fa fa-envelope"></i></span>
        </div>
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <div class="input-group">
          <input type="text" id="name" name="name" value="Abdul RAFAY" class="form-control">
          <span class="form-icon"><i class="fa fa-user"></i></span>
        </div>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <div class="input-group">
          <input type="text" id="address" name="address" value="ISB" class="form-control">
          <span class="form-icon"><i class="fa fa-map-marker-alt"></i></span>
        </div>
      </div>
      <div class="form-group">
        <label for="phone_no">Phone No:</label>
        <div class="input-group">
          <input type="text" id="phone_no" name="phone_no" value="03115958434" class="form-control">
          <span class="form-icon"><i class="fa fa-phone"></i></span>
        </div>
      </div>
      <div class="form-group">
        <label for="payment_info">Payment Info:</label>
        <div class="input-group">
          <select name="payment_info" class="form-control">
            <option value="cash">Cash</option>
            <option value="card">Card</option>
          </select>
          <span class="form-icon"><i class="fa fa-credit-card"></i></span>
        </div>
      </div>
      <div>
      <!-- For the dropdown Department-->
        <label for="resturant">Resturant: &nbsp;</label>
        <select id="dropdown" name="resturant">
        @foreach($resturants as $resturant)
        <option value="{{$resturant->id}}">
        {{$resturant->resturant_name}}
        </option>
      @endforeach
      </select>
      <br><br>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-primary">
      </div>
    </form>
  </div>
</body>
</html>
