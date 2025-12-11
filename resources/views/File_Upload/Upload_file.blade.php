<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="file"] {
            display: block;
            margin-bottom: 10px;
        }

        .button_style {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button_style:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body class="body_style">
<div class="container">
        <form action="{{URL::to('/file_store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h2>Uploading File</h2>
            <label>Please upload a file here:</label><br><br>
            <input type="file" name="file"><br><br>
            <button type="submit" class="button_style">Submit</button>
        </form><br>
    </div>

</body>
</html>