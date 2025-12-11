<!DOCTYPE html>
<html>
<head>
    <title>Delete a Restaurant</title>
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1555992457-b8fefdd09069?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8cmVzdHVyYW50fGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60");
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
    <h2>Delete a Restaurant</h2>
    <form action="{{ route('resturant.delete') }}" method="post">
        @csrf
        <label for="id">Restaurant ID:</label>
        <input type="text" id="id" name="std_id" placeholder="" required><br><br>
        <input type="submit" name="delete_std_data" value="Delete">
    </form>
</body>
</html>
