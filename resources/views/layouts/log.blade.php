<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Proyecto Laravel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    @if (session('success'))
    <div class=" bg-green-200 text-green-600 absolute top-0 w-full py-3 px-4 text-center">
        {{ session('success') }}
    </div>
    @endif
    @yield('content')
</body>

</html>
