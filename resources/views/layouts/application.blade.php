<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Laracast 1')</title>
  </head>
  <body>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="contact">Contact Us</a></li>
      <li><a href="about">About Us</a></li>
    </ul>
    @yield('content')
  </body>
</html>
