<!DOCTYPE html>
<html>
<head>
    <title>Delete a Customer</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("https://media.istockphoto.com/id/1190011307/photo/concept-of-online-testing-questionnaires-voting-image.jpg?s=612x612&w=0&k=20&c=OJ0Oc007f7oCtnkkHqmO3Z62utatYBmIDBHgLPtDcwc=s");
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
        }
        
        .container {
            width: 500px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
        
        h2 {
            text-align: center;
            font-size: 2em;
            margin-top: 0;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-bottom: 20px;
        }
        
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
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
    <div class="container">
        <h2>Delete a Customer</h2>
        <form action="{{ route('customer.delete') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="id">Customer Id:</label>
                <input type="text" id="id" name="std_id" placeholder="">
               </div>
            <div class="form-group">
                <input type="submit" name="delete_std_data" value="Delete">
            </div>
        </form>
    </div>
</body>
</html>
