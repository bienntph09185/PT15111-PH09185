<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    @yield('styles')
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        <h1 class="header">@yield('header')</h1>
        </header>
        <nav>@yield('navbar')</nav>


        @yield('content')

        <footer>
            <h1>@yield('footer')</h1>
        </footer>
    </div>

    @yield('scripts')
</body>

</html>