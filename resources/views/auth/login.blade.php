<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100 px-4">
    <div class="max-w-5xl w-full bg-white rounded-lg shadow-md flex flex-col md:flex-row overflow-hidden">
        <!-- Left Section: Login Form -->
        <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
            <!-- Logo -->
            <div class="mb-6 flex justify-center md:justify-start">
                <img src="{{ asset('logo1.png') }}" alt="Logo" class="w-24 h-24">
            </div>

            <h2 class="text-2xl font-semibold text-gray-900 text-center md:text-left">Sign in to your account</h2>
            <p class="text-gray-500 text-sm mt-1 text-center md:text-left">
                Not a member? <a href="#" class="text-indigo-600 font-medium">Start a 14 day free trial</a>
            </p>

            <form action="#" method="POST" class="mt-6">
                <!-- Email Input -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email address</label>
                    <input type="email" placeholder="Enter your email..." class="mt-1 block w-full px-4 py-2 border rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Password Input -->
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" placeholder="Enter your password..." class="mt-1 block w-full px-4 py-2 border rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mt-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-indigo-600 text-sm">Forgot password?</a>
                </div>

                <!-- Sign In Button -->
                <button type="submit" class="w-full bg-indigo-600 text-white mt-4 px-4 py-2 rounded-md shadow-md hover:bg-indigo-700">
                    Sign in
                </button>
            </form>

            <!-- Social Login -->
            <div class="mt-6 text-center">
                <p class="text-gray-500 text-sm">Or continue with</p>
                <div class="mt-3 flex justify-center space-x-4">
                    <button class="flex items-center space-x-2 px-4 py-2 border rounded-md shadow-md hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 48 48">
                        <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>
                        <span class="text-sm text-gray-600">Google</span>
                    </button>
                    <button class="flex items-center space-x-2 px-4 py-2 border rounded-md shadow-md hover:bg-gray-100">
                        <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" class="w-5 h-5">
                        <span class="text-sm text-gray-600">GitHub</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Right Section: Image -->
        <div class="w-full md:w-1/2 hidden sm:hidden md:block">
            <img src="{{ asset('art.jpg') }}" alt="Login Image" class="w-full h-full object-cover">
        </div>
    </div>
</body>
</html>
