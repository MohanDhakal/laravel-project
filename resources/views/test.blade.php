<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button id="clickme" onclick="replacePage()">replace page</button>
    <div id="replaceMe">
        <h1> i will be replaced by another html page</h1>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        function replacePage() {
                console.log('fnction called');
           $('#replaceMe').load('/blog-single');
        }
    </script>
</body>

</html>