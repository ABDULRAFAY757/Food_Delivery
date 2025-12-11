<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Order Record</title>
</head>
<body>
    <h2>Update Order Record</h2>
    <form action="{{ route('order.update',$DEF->id) }}" method="post">
        <!-- To prevent Cross-Site Request Forgery (CSRF) attacks, use @csrf with the post method. -->
        @csrf

        <!-- Order ID -->
        <label for="invoice_id">Invoice ID:</label>
        <input type="text" id="invoice_id" name="std_invoice_id" value="{{ $DEF->invoice_id }}"><br><br>
       
        <!-- Restaurant ID -->
        <!-- <label for="restaurant_id">Restaurant ID:</label>
        <input type="text" id="restaurant_id" name="std_restaurant_id" value="{{ $DEF->restaurant_id }}"><br><br> -->

        <!-- Quantity -->
        <label for="quantity">Quantity :</label>
        <input type="text" id="quantity" name="std_quantity" value="{{ $DEF->quantity }}"><br><br>

        <!-- Order Date -->
        <label for="order_date">Order date:</label>
        <input type="text" id="order_date" name="std_order_date" value="{{ $DEF->order_date }}"><br><br>

        <!-- Order Status -->
        <label for="order_status">Order Status:</label>
        <input type="text" id="order_status" name="std_order_status" value="{{ $DEF->order_status }}"><br><br>

        <!-- Total Cost -->
        <label for="total_cost">Total Cost:</label>
        <input type="text" id="total_cost" name="std_total_cost" value="{{$DEF->total_cost }}"><br><br>

        <!-- Update Button -->
        <input type="submit" name="update_order" value="Update"><br><br>
    </form>
</body>
</html>
    