<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture | Your Favourite Meubel</title>

    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- header -->
    @include('layouts.header')
    <!-- / header -->

    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('/js/script.js') }}"></script>
    <script src="{{ asset('/js/script2.js') }}"></script>
    <script src="{{ asset('/js/script3.js') }}"></script>

</body>

</html>
