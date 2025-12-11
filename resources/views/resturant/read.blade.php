<!DOCTYPE html>
<html lang="en">
<head>
    <title>Read Restaurants</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("https://media.istockphoto.com/id/478432824/photo/fashion-stylish-restaurant-interior.webp?b=1&s=170667a&w=0&k=20&c=xtOsYq5Dtl5ld9e1wVaVWVZP5AJgfkmOlYcgXRHiffc=");
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        h3 {
            background-color: lightgrey;
            color: blue;
            padding: 10px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: lightgrey;
        }
    </style>
</head>
<body>
<div class="container">
    <h3>Reading the Restaurant Data</h3>
    <table>
        <thead>
        <tr>
            <th>Restaurant Name</th>
            <th>Restaurant Address</th>
            <th>Restaurant Phone</th>
            <th>Restaurant Email</th>
        </tr>
        </thead>
        <tbody>
        <!-- Using Blade Loop. -->
        <!-- From the controller, the values have been received in the array 'restaurants'. -->
        @foreach ($resturants as $resturant)
            <tr>
                <td>{{$resturant->resturant_name}}</td>
                <td>{{$resturant->resturant_address}}</td>
                <td>{{$resturant->resturant_phone}}</td>
                <td>{{$resturant->resturant_email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>