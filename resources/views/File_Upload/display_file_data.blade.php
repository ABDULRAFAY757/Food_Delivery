<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View & Download</title>
</head>
<table class="container">
        <tr>
            <th>NAME</th>
            <th>View</th>
            <th>Download</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->file }}</td>
            <td><a href="{{ route('view_file', $item->id) }}">View</a></td>
            <td><a href="{{ route('download_file', $item->id) }}">Download</a></td>
        </tr>
        @endforeach
    </table>

    
</body>
</html>