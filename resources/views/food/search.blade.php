<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Food Record </title>
    <style>
        body {
            background-color: #ffffff;
            font-family: sans-serif;
        }
        h2 {
            text-align: center;
            font-size: 2em;
            margin-top: 0;
        }
        form {
            width: 500px;
            margin: 0 auto;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
        }
        select {
            width: 100%;
        }
        input[type="submit"] {
            background-color: #000000;
            color: #ffffff;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Search Food Record</h2>
    <form action="{{ route('food.search') }}" method="post">
        @csrf
        <label for="id">Food ID:</label>
        <input type="text" id="id" name="std_id" placeholder=""><br><br>
        <input type="submit" name="submit_std_data" value="Search"><br><br>
    </form>
</body>
</html>