<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <center>
        <h2>
            @if (session('status'))
            <div class="alert alert-alert" role="alert">
                {{ session('status') }}
            </div>
        @endif
        </h2>
    </center>

</body>
</html>
