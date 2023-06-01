<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture | Your Favourite Meubel</title>

    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <form action="/insert_reg">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username" value="{{ old('username') }}">
        @error('username')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
        <br>
        <label for="first_name">first name</label>
        <input type="text" name="first_name" value="{{ old('first_name') }}">
        @if ($errors->has('first_name'))
            <div class="text-red-500">
                {{ $errors->first('first_name') }}
            </div>
        @endif
        <br>
        <label for="last_name">Last name</label>
        <input type="text" name="last_name" value="{{ old('last_name') }}">
        @if ($errors->has('last_name'))
            <div class="text-red-500">
                {{ $errors->first('last_name') }}
            </div>
        @endif
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <div class="text-red-500">
                {{ $errors->first('email') }}
            </div>
        @endif
        <br>
        <label for="password">password</label>
        <input type="password" name="password">
        @if ($errors->has('password'))
            <div class="text-red-500">
                {{ $errors->first('password') }}
            </div>
        @endif
        <br>
        <label for="repassword">password Konfirmasi</label>
        <input type="password" name="repassword">
        @error('repassword')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror
        <br>
        <button class="bg-gray-200">Submit</button>
    </form>


    <!-- Javascript -->
    <script src="js/script.js"></script>
</body>

</html>
