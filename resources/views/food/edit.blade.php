<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Food Record</title>
    <style>
        body {
            background-image: url('https://cdn.pixabay.com/photo/2018/06/29/08/15/doodle-3505459_1280.png');
            background-size: cover;
            background-position: center;
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
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
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
        input[type="submit"] {
            background-color: #000000;
            color: #ffffff;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h2>Update Food Record</h2>
    <form action="{{ route('food.update') }}" method="post">
        @csrf
        <input type="hidden" name="std_id" value="{{ $food->id }}">
        <label for="food_name">Food Name:</label>
        <input type="text" id="food_name" name="std_food_name" value="{{ $food->food_name }}"><br>
        <label for="food_description">Food Description:</label>
        <input type="text" id="food_description" name="std_food_description" value="{{ $food->food_description }}"><br>
        <label for="food_category">Food Category:</label>
        <input type="text" id="food_category" name="std_food_category" value="{{ $food->food_category }}"><br>
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="std_quantity" value="{{ $food->quantity }}"><br>
        <label for="price">Price:</label>
        <input type="text" id="price" name="std_price" value="{{ $food->price }}"><br>
        <label for="dietaryinformation">Dietary Information:</label>
        <input type="text" id="dietaryinformation" name="std_dietaryinformation" value="{{ $food->dietaryinformation }}"><br><br>
        <input type="submit" name="submit_std_data" value="Update"><br><br>
    </form>
</body>
</html>
