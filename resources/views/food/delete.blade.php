<!DOCTYPE html>
<html>
<head>
    <title>Delete a Food</title>
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1629734553549-5ba5e8c8a80a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTZ8UU9FQml0MjZEM0V8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60');
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
        select {
            width: 100%;
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
    <h2> Delete a Food</h2>
    <form action="{{ route('food.delete') }}" method="post">
        @csrf
        <label for="id">Food Id:</label>
        <input type="text" id="id" name="std_id" placeholder="" style="border-radius: 10px;"><br><br>  
        <input type="submit" name="delete_std_data" value="Delete"><br><br>
    </form>
</body>
</html>
