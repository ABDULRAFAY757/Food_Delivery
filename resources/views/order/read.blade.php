<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

  <title>Read Orders</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }
    
    h3 {
      background-color: lightgrey;
      color: blue;
      padding: 10px;
      width: 50%;
      margin: 0 auto;
      text-align: center;
    }
    
    table {
      margin: 20px auto;
      border-collapse: collapse;
      width: 80%;
    }
    
    th, td {
      padding: 10px;
      text-align: left;
    }
    
    th {
      background-color: lightblue;
      color: white;
    }
    
    tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    
    img.logo {
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
  <h3>Reading the Order Data</h3>
  <img src="https://cdn.pixabay.com/photo/2016/09/11/08/35/mathematics-1660861_1280.png" alt="Logo" class="logo">
  <table>
  <table id="order_registration_table">

    <thead>
      <tr>
        <th>Customer</th>
        <th>Id</th>
        <th>Invoice Id</th>
        <!-- <th>Restaurant Id</th> -->
        <th>Quantity</th>
        <th>Order date</th>
        <th>Order Status</th>
        <th>Total Cost</th>
        <th>Food Name</th>
      </tr>
    </thead>
    <tbody>
      <!-- Using Blade Loop. -->
      <!-- From the controller, the values have been
      received in the array 'orders'. -->
      @foreach ($orders as $order)
      <tr>
        <td>{{$order->customer->name}}</td>
        <td>{{$order->id}}</td>
        <td>{{$order->invoice_id}}</td>
        <!-- <td>{{$order->restaurant_id}}</td> -->
        <td>{{$order->quantity}}</td>
        <td>{{$order->order_date}}</td>
        <td>{{$order->order_status}}</td>
        <td>{{$order->total_cost}}</td>
        <td>{{$order->food->food_name}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
<script>
    $(document).ready(function() {
        $('#order_registration_table').DataTable();
    });
</script>
