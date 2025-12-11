<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Restaurant Record</title>
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1596040014776-459f4fdf9df5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHJlc3R1cmFudHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60");
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            font-size: 2em;
            margin-top: 20px;
            color: white;
        }
        form {
            width: 500px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: black;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: DodgerBlue;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #1877f2;
        }
    </style>
</head>
<body>
    <h2>Update Restaurant Record</h2>
    <form action="{{ route('resturant.update') }}" method="post">
        @csrf

        <label for="id">ID:</label>
        <input type="text" id="id" name="std_id" value="{{$DEF->id}}"><br><br>

        <label for="resturant_name">Restaurant Name:</label>
        <input type="text" id="resturant_name" name="std_resturant_name" value="{{$DEF->resturant_name}}"><br><br>
        
        <label for="resturant_address">Restaurant Address:</label>
        <input type="text" id="resturant_address" name="std_resturant_address" value="{{$DEF->resturant_address}}"><br><br>

        <label for="resturant_phone">Restaurant Phone:</label>
        <input type="text" id="resturant_phone" name="std_resturant_phone" value="{{$DEF->resturant_phone}}"><br><br>

        <label for="resturant_email">Restaurant Email:</label>
        <input type="text" id="resturant_email" name="std_resturant_email" value="{{$DEF->resturant_email}}"><br><br>

        <input type="hidden" id="id" name="std_id" value="{{$DEF->id}}">

        <input type="submit" name="update_std_data" value="Update">
    </form>
</body>
</html>