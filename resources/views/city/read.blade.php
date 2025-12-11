<!DOCTYPE html>
<html lang="en">
<head>
<title>Read Cities</title>
<style>
h3 {
  background-color: lightgrey;
  color: blue;
  width: 50%;
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
<h3>Reading the City Data</h3>
<table>
<thead>
<tr>
<th>ID</th>
<th>City Name</th>
</tr>
</thead>
<tbody>
<!-- Using Blade Loop. -->
<!-- From the controller, the values have been
received in the array 'customers'. -->
@foreach ($cities as $city)
<tr>
<td>{{$city->city_code}}</td>
<td>{{$city->city_name}}</td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>
