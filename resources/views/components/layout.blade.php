<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastro Time</title>

    @vite('resources/css/app.css')
  </head>
  <body>
    <header>
      <nav>
        <h1>Gastro Time</h1>
        <a href="{{ route("restaurants.index") }}">All Restaurants</a>
        <a href="{{ route("restaurants.register") }}">Register Restaurant</a>
        <a href="{{ route("restaurants.reservation") }}">Make a Reservation</a>
      </nav>
    </header>

    <main class="container">
      {{ $slot }}
    </main>
  </body>
</html>