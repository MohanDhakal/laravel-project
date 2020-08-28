<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data" action="uploadfile">
        <label for="myfile">Select a file:</label>
        <input type="file" id="myfile" name="pdf" /><br>
        @csrf
        <button type="submit">upload file</button>
    </form>
</body>

</html>