<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submenu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    <header class="submenu-header">
        <a href="/" class="text-white font-bold"><</a>
                <h2 class="text-white">KPP Pratama Mojokerto</h2>
    </header>
    @yield('content')
    <footer class="">
        <p class="bg-main-bg text-white text-sm text-center py-1">&copy; KPP Pratama Mojokerto | 2022</p>
    </footer>
</body>

</html>
