<!DOCTYPE html>
<html>
<head>
    <title>Add New Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("https://media.istockphoto.com/id/1163284610/photo/very-stylish-indian-gourmet-restaurant.webp?b=1&s=170667a&w=0&k=20&c=imchNbvXve2N3ehGzw4B8fE5AICkH7kUWj4eiSzYVvk=");
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

        h2 {
            border: 1px solid black;
            background-color: DodgerBlue;
            text-align: center;
            color: white;
            padding: 10px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 250px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: DodgerBlue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1877f2;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Add New Restaurant</h2>
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('resturant.store') }}" method="post">
        @csrf
        <label for="resturant_name">Resturant Name:</label>
        <input type="text" id="resturant_name" name="resturant_name" value="Howdy"><br><br>
        <label for="resturant_address">Resturant Address:</label>
        <input type="text" id="resturant_address" name="resturant_address" value="F7, ISB"><br><br>
        <label for="resturant_phone">Restaurant Phone:</label>
        <input type="text" id="resturant_phone" name="resturant_phone" value="03114563234"><br><br>
        <label for="resturant_email">Email:</label>
        <input type="text" id="resturant_email" name="resturant_email" value="howdyar@gmail.com"><br><br>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
