<body>
<table>
    <tr>
        <th>Name</th>
        <th>View</th>
        <th>Download</th>
    </tr>
    @foreach($data as $data)
    <tr>
        <td>{{$data->file}}</td>
        <td><a href="{{URL::to('view_file', $data->id)}}">View</a></td>
        <td><a href="{{URL::to('download_file', $data->file)}}">Download</a></td>
    </tr>
    @endforeach
</table>
</body>