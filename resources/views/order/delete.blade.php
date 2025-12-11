<!DOCTYPE html>
<html>
<head>
    <title>Delete an Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h2 {
            background-color: DodgerBlue;
            color: white;
            padding: 10px;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
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
            background-color: #4287f5;
        }

        .logo {
            width: 150px;
            height: 150px;
            display: block;
            margin: 0 auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Delete an Order</h2>
    <img src="https://cdn.pixabay.com/photo/2016/09/11/08/35/mathematics-1660861_1280.png" alt="Logo" class="logo">
    <form action="{{ route('order.delete') }}" method="post">
        @csrf
        <label for="id"> ID:</label>
        <input type="text" id="id" name="std_id" value=""><br><br>
        <input type="submit" name="delete_order" value="Delete">
    </form>
</body>
</html>
