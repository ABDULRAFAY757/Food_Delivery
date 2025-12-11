<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Include DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<title>Read FOOD'S DATA</title>
<style>
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image: url('https://images.unsplash.com/photo-1574085733277-851d9d856a3a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGRlc3NlcnR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60');
  background-size: cover;
  background-position: center;
}

.container {
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 8px;
  padding: 20px;
  width: 800px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

.title {
  background-color: dodgerblue;
  color: white;
  text-align: center;
  padding: 10px;
  border-radius: 4px;
  margin-bottom: 20px;
}

.table-container {
  overflow-x: auto;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid black;
  padding: 10px;
}

th {
  background-color: lightgrey;
}

</style>
</head>
<body>
<div class="container">
  <h3 class="title">Reading the FOOD Data</h3>
  <div class="table-container">
    <table>
    <table id="food_registration_table">  
    <thead>
        <tr>
          <th>Food ID</th>
          <th>Food Name</th>
          <th>Food Description</th>
          <th>Food Category</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Dietary Information</th>
        </tr>
      </thead>
      <tbody>
        <!-- Using Blade Loop. -->
        <!-- From controller, the values have been received in the array 'foods'. -->
        @foreach ($foods as $food)
        <tr>
          <td>{{$food->id}}</td>
          <td>{{$food->food_name}}</td>
          <td>{{$food->food_description}}</td>
          <td>{{$food->food_category}}</td>
          <td>{{$food->quantity}}</td>
          <td>{{$food->price}}</td>
          <td>{{$food->dietaryinformation}}</td>
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
