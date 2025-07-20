<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the Gastro Time</h1>
    <p>Click the button to view the list of restaurants.</p>

    <a href="{{ route('restaurants.index') }}">
        Find ours Partners Restaurants!
    </a>
</body>
</html>