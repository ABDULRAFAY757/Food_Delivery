<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$data->filename}}</title>
<style>
.back_style{
border-radius: 6px;
box-shadow: 5px 5px 5px 5px gray;
background-color: lightgoldenrodyellow;
padding-left: 48%;
}
</style>

</head>
<body>
<img src="/uploads/{{$data->file}}" alt="">

<iframe height="500vh" width="100%" src="/uploads/{{$data->file}}"
frameborder="2"></iframe>
<div class="back_style"><a href="/show_data">BACK</a></div>
</body>
</html>