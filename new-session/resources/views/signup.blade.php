<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | MyApp</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Navigation Bar -->
    <nav class="bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{route('dashboard')}}" class="text-white text-lg font-semibold">MyApp</a>
                </div>
                <!-- Navigation Links -->
                <div class="flex space-x-4">
                    <a href="{{ route('dashboard') }}" class="text-white hover:bg-blue-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="{{ route('signin') }}" class="text-white hover:bg-blue-700 px-3 py-2 rounded-md text-sm font-medium">Signin</a>
                    <a href="{{ route('signup') }}" class="text-white hover:bg-blue-700 px-3 py-2 rounded-md text-sm font-medium">Signup</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Flash Message -->
    <div class="container mx-auto mt-4">
        @if (session()->has('success') || session()->has('error'))
        <div class="max-w-md mx-auto
                    {{ session()->has('success') ? 'bg-green-100 border-green-400 text-green-700' : 'bg-red-100 border-red-400 text-red-700' }}
                    px-4 py-3 rounded relative"
             role="alert">
            <strong class="font-bold">
                {{ session()->has('success') ? 'Congratulations' : 'Oops' }}
            </strong>
            <span class="block sm:inline">
                {{ session()->pull('success') ?? session()->pull('error') }}
            </span>
        </div>

    @endif

    </div>

    <!-- Sign-Up Form -->
    <div class="flex items-center justify-center flex-grow">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Sign Up</h2>
            <form action="{{ route('signup-store') }}" method="POST" class="mt-6 space-y-4">
                @csrf
                <!-- Username -->
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username" required
                        class="w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700">
                    </div>
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700">
                </div>
                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700">
                </div>
                <!-- Confirm Password -->
                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" id="conpass" name="conpass" required
                        class="w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700">
                        @if($errors->any())
                        <p class="text-sm text-justify text-lime-800">
                            @foreach ($errors->all() as $error)
                            {{str_replace("conpass","confirm password",$error)}}
                            <br>
                            @endforeach
                        </p>
                    @endif                    </div>
                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center py-4">
        <p>&copy; {{ date('Y') }} MyApp. All rights reserved.</p>
    </footer>
</body>

</html>
