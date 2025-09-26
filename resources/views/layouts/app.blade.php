<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>My Laravel App</h1>
    <nav>
        <a href="/">home</a>
        <a href="/about">about</a>
        <a href="/contact">contact</a>
        <a href="/FAQ">FAQ</a>
        <a href="/feedback">feedback</a>
    </nav>
    </header>
    <main>
        @yield('content')
    </main>

<footer>
    &copy; 2025.
</footer>
</body>
</html>