<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <span class="ml-3">Index Page</span>

    <form action="{{ route('reg') }}" method="post">
        <button type="submit">Submit</button>
    </form>
</body>

</html>