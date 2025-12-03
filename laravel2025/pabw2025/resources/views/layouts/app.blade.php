<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
    <header>
        <h1>Dari layouts.app</h1>
    </header>
    
    <div class="container mx-auto px-4" style="backgroun-color:red;">
        <div class="grid grid-cols-4 gap-4">
            <div>@yield('sidebar')</div>
            <div>@yield('isi')</div>
        </div>  
    </div>
    <footer>
        Ini adalah footer
    </footer>
</body>
</html>