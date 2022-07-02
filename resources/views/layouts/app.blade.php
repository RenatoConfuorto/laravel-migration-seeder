<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <style>
    table th,
    table td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <main>
    @yield('main-content')
  </main>
</body>
</html>