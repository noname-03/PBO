<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>upload</h1>
    <form action="{{ route('image.upload.post') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="name" >
    <input type="submit" value="Upload">
    </form>
</body>
</html>
