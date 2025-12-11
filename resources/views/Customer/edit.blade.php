<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Customer Record</title>
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1448932223592-d1fc686e76ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=869&q=80");
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #fff;
        }

        h2 {
            text-align: center;
            color: #fff;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h2>Update Customer Record</h2>
    <form action="{{ route('customer.update') }}" method="post">
        <!-- 
        What is CSRF attack: 
        Unauthorized commands are performed 
        on behalf of an authenticated user.
        Read detail here: https://laravel.com/docs/10.x/csrf
        -->
        <!-- To prevent the Cross-Site Request Forgery (CSRF) attack,
        MUST use @csrf with post method. -->
        @csrf
        <!-- NOTE:
             The variable $DEF has been passed from 
             the controller function searchStudentRecord() -->
        <!-- Customer_id -->
        <label for="id">Customer Id:</label>
        <input type="text" id="id" name="std_id" value="{{$DEF->id}}">

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="text" id="email" name="std_email" value="{{$DEF->email}}">

        <!-- Name-->
        <label for="name">Name:</label>
        <input type="text" id="name" name="std_name" value="{{$DEF->name}}">

        <!-- Address -->
        <label for="address">Address:</label>
        <input type="text" id="address" name="std_address" value="{{$DEF->address}}">

        <!-- Phone Number -->
        <label for="phone_no">Phone Number:</label>
        <input type="text" id="phone_no" name="std_phone_no" value="{{$DEF->phone_no}}">

        <!-- Payment_info -->
        <label for="payment_info">Payment Info:</label>
        <input type="text" id="payment_info" name="std_payment_info" value="{{$DEF->payment_info}}">

        <!-- Update Button -->
        <input type="submit" name="update_std_data" value="Update">

        
    </form>
</body>

</html>
