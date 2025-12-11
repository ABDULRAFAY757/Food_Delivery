<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Orders Record</title>
</head>
<body>
    <h2>Search Orders Record</h2>
    <form action="{{ route('order.search') }}" method="post">


        <!-- Adjust according to your requirements -->
        @csrf
        <label for="id">Order ID: &nbsp;</label>
        <input type="text" id="id" name="std_id" placeholder=""><br><br>

        <input type="submit" name="submit_std_data" value="Search"><br><br>
    </form>
</body>
</html>
