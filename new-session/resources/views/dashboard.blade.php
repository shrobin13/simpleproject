<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset    = "UTF-8">
    <meta name       = "viewport" content        = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <title>Noob</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <nav class = "bg-blue-600">
        <div class = "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class = "flex items-center justify-between h-16">
                <!-- Logo -->
                <div class = "flex-shrink-0">
                    <a href  = "{{route('dashboard')}}" class = "text-white text-lg font-semibold">MyApp</a>
                </div>
                <!-- Navigation Links -->
                <div class = " md:flex space-x-4">
                    <a href  = "{{route('dashboard')}}"
                        class   = "text-white hover:bg-blue-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href  = "{{route('signin')}}"
                        class  = "text-white hover:bg-blue-700 px-3 py-2 rounded-md text-sm font-medium">Signin</a>
                    <a href  = "{{route('signup')}}"
                        class = "text-white hover:bg-blue-700 px-3 py-2 rounded-md text-sm font-medium">Signup</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- @php
        dd($username);
    @endphp --}}
    <main>
        <h1 class="text-center text-2xl font-bold text-lime-700 mt-9 mb-9">Hello there, {{$username}} </h1>
        <a href="{{route('logout')}}" class="px-5 py-2 bg-lime-300 text-gray-600 flex flex-col  justify-center text-center text-xl rounded-md mx-10">Logout</a>
    </main>

</body>

</html>
