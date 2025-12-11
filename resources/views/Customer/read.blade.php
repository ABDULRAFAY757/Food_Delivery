<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Include DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <title>Read Customers</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url("https://images.unsplash.com/photo-1547489432-cf93fa6c71ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80");
      background-size: cover;
      background-position: center;
    }

    .container {
      max-width: 800px;
      padding: 20px;
      border-radius: 5px;
      background-color: rgba(255, 255, 255, 0.8);
    }

    h3 {
      background-color: lightgrey;
      color: blue;
      padding: 10px;
      text-align: center;
    }

    .table-container {
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
    }

    th, td {
      border: 1px solid black;
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: lightgrey;
    }

    .icon {
      display: inline-block;
      width: 20px;
      height: 20px;
      margin-right: 5px;
      vertical-align: middle;
    }
  </style>
</head>
<body>
  <div class="container">
    <h3>Reading the Customer Data</h3>
    <div class="table-container">
      <table>
      <table id="food_registration_table">  
        <thead>
          <tr>
          <th>Customer ID</th>
            <th>Email</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone No.</th>
            <th>Payment Info</th>
            <th>Resturant</th>
          </tr>
        </thead>
        <tbody>
          <!-- Using Blade Loop. -->
          <!-- From the controller, the values have been received in the array 'customers'. -->
          @foreach ($customers as $customer)
          <tr>
          <td>{{$customer->id}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->phone_no}}</td>
            <td>{{$customer->payment_info}}</td>
            <td>{{$customer->resturant->resturant_name}}</td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
<script>
    $(document).ready(function() {
        $('#food_registration_table').DataTable();
    });
</script>