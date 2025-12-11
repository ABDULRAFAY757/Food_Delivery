<!DOCTYPE html>
<html>
<head>

 <title>Add New Order</title>
 <!-- For Success alert that appears after insertion -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
   body {
     background-image: url("https://images.unsplash.com/photo-1647427017067-8f33ccbae493?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8T3JkZXIlMjB0cmFuc2FjdGlvbnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60");
     background-size: cover;
     background-repeat: no-repeat;
   }
   .container {
     max-width: 500px;
     margin: 0 auto;
     padding: 20px;
     background-color: rgba(255, 255, 255, 0.8);
     border-radius: 10px;
   }
   h2 {
     border: 1px solid black;
     background-color: DodgerBlue;
     text-align: center;
     padding: 10px;
     color: white;
   }
   .logo {
     width: 150px;
     height: 150px;
     display: block;
     margin: 0 auto;
     margin-top: 20px;
     margin-bottom: 20px;
   }
 </style>
</head>
<body>
 <div class="container">
   <h2>Add New Order</h2>
   <img src="https://cdn.pixabay.com/photo/2016/09/11/08/35/mathematics-1660861_1280.png" alt="Logo" class="logo">
   <!-- For Redirecting With Flashed Session Data when 'Submit' button -->
   <!-- is pressed in the 'create.blade.php' view which calls the relevant -->
   <!-- function 'store' in the OrderController and then this -->
   <!-- view, 'create.blade.php' is again called -->
   <!-- kya issue arha?? -->
   <!-- START -->
   @if (session('status'))
   <div class="alert alert-success alert-dismissible">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     {{ session('status') }}
   </div>
   @endif
   <!-- END -->
   <form action="{{ route('order.store') }}" method="post">
     @csrf
     <div class="form-group">
       <label for="customer" class="form-label">Customer:</label>
       <select id="customer" name="customer" class="form-control">
         @foreach($customers as $customer)
         <option value="{{$customer->id}}">{{$customer->name}}</option>
         @endforeach
       </select>
     </div>
     <div class="form-group">
       <label for="food" class="form-label">Food Name:</label>
       <select id="food" name="food" class="form-control">
         @foreach($foods as $food)
         <option value="{{$food->id}}">{{$food->food_name}}</option>
         @endforeach
       </select>
     </div>
     <label for="invoice_id">Invoice ID: &nbsp;</label>
     <input type="text" id="invoice_id" name="invoice_id" value="IVD001"><br><br>
     <!-- <label for="restaurant_id">Restaurant ID: &nbsp;</label>
     <input type="text" id="restaurant_id" name="restaurant_id" value=""><br><br> -->
     <label for="quantity">Quantity : &nbsp;</label>
     <input type="text" id="quantity" name="quantity" value=""><br><br>
     <label for="order_date">Order Date:</label>
      <input type="date" id="order_date" name="order_date"><br><br>
      <label for="order_status">Order Status: &nbsp;</label>
     <input type="text" id="order_status" name="order_status" value=""><br><br>
     <label for="total_cost">Total Cost: &nbsp;</label>
     <input type="text" id="total_cost" name="total_cost" value=""><br><br>
   
     <input type="submit" value="Submit">
   </form>
 </div>
</body>
</html>

