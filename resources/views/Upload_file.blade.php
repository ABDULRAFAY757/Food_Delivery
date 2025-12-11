<body class="body_style">
<div class="container">
<form action="{{URL::to('/file_store')}}" method="post"
enctype="multipart/form-data">
@csrf
<h2>Uploading File</h2>
<label for="">Please Upload file here</label><br><br>
<input type="file" name="file" ><br><br>
<button type="submit" class="button_style">Submit</button>
</form><br>
</div>
</body>