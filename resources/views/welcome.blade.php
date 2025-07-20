<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastro Time</title>

    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to the Gastro Time</h1>
    <p>Click the button to view the list of restaurants.</p>

    <a href="{{ route('restaurants.index') }}" class="btn mt-4 inline-block">
        Find ours Partners Restaurants!
    </a>
</body>
</html>