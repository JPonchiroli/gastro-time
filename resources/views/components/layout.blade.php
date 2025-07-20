<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastro Time</title>
  </head>
  <body>
    <header>
      <nav>
        <h1>Gastro Time</h1>
        <a href="#">Registrar Restaurante</a>
        <a href="#">Realizar Reserva</a>
      </nav>
    </header>

    <main>
      {{ $slot }}
    </main>
  </body>
</html>