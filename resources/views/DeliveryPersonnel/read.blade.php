<!DOCTYPE html>
<html lang="en">
<head>
<title>Read Delivery Personnels</title>
<style>
h3 {
  background-color: lightblue;
  color: white;
  width: 50%;
  padding: 10px;
  border: 1px solid black;
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
  background-color: lightblue;
  color: white;
}
</style>
</head>
<body>
<h3>Reading the Delivery Data</h3>
<table>
<thead>
<tr>
<th>Personnel ID</th>
<th>Personnel Name</th>
<th>Personnel Address</th>
<th>Personnel Phone</th>
</tr>
</thead>
<tbody>
<!-- Using Blade Loop. -->
<!-- From controller, the values have been
received in the array 'students'. -->
@foreach ($DeliveryPersonnels as $DeliveryPersonnel)
<tr>
<td>{{$DeliveryPersonnel->personnel_id}}</td>
<td>{{$DeliveryPersonnel->personnel_name}}</td>
<td>{{$DeliveryPersonnel->personnel_address}}</td>
<td>{{$DeliveryPersonnel->personnel_phone}}</td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>