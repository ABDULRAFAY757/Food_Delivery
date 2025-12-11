<!DOCTYPE html>
<html>
<head>
    <title>Add New FOOD</title>
    <!-- For Success alert that appears after deletion -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }

        .container {
            background-image: url('https://images.unsplash.com/photo-1499636136210-6f4ee915583e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGRlc3NlcnR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60');
            background-size: cover;
            background-position: center center;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            padding: 20px;
            max-width: 400px;
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

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .form-group input[type="submit"] {
            background-color: dodgerblue;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #007bff;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <h2 class="title">Add New FOOD</h2>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('food.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="id">Food ID:</label>
                <input type="text" id="id" name="id"  value="1">
            </div>
            <div class="form-group">
                <label for="food_name">Food Name:</label>
                <input type="text" id="food_name" name="food_name" value="Milk Shake">
            </div>
            <div class="form-group">
                <label for="food_description">Food Description:</label>
                <input type="text" id="food_description" name="food_description" value="Creamy and refreshing">
            </div>
            <div class="form-group">
                <label for="food_category">Food Category:</label>
                <select name="food_category">
                    <option value="appetizer">Appetizer</option>
                    <option value="dessert">Dessert</option>
                    <option value="main course">Main Course</option>
                    <option value="beverage">Beverage</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" id="quantity" name="quantity" value="1">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" value="100$">
            </div>
            <div class="form-group">
                <label for="dietaryinformation">Dietary Information:</label>
                <select name="dietaryinformation">
                    <option value="Sugar-free">Sugar-free</option>
                    <option value="vegan">Vegan</option>
                    <option value="Paleo">Paleo</option>
                    <option value="Nut-free">Nut-free</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
</body>
</html>
