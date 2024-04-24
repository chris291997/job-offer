<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Add your CSS stylesheets and scripts here -->
</head>
<body>
    <header>
        <!-- Your header content here -->
    </header>

    <nav>
        <!-- Your navigation bar content here -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Your footer content here -->
    </footer>
</body>
</html>
