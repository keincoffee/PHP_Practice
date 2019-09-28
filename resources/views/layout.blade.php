<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'KeiGuy')</title>
</head>
<body>
    @yield('content')

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/projects">Projects</a></li>
    </ul>
</body>
<footer>
    <p>
    </p>
</footer>
</html>