<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar & Navbar</title>
    @vite('resources/css/app.css')

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const mainContent = document.getElementById("mainContent");

            sidebar.classList.toggle("-translate-x-full");

            if (sidebar.classList.contains("-translate-x-full")) {
                mainContent.style.transform = "translateX(0)"; // Move content back to start
            } else {
                mainContent.style.transform = "translateX(16rem)"; // Move content to the right (64 = 16rem)
            }
        }


        function toggleMobileMenu() {
            const menu = document.getElementById("mobileMenu");
            if (menu.classList.contains("hidden")) {
                menu.classList.remove("hidden");
                setTimeout(() => {
                    menu.classList.remove("opacity-0", "-translate-y-5");
                }, 10); // Small delay to trigger animation properly
            } else {
                menu.classList.add("opacity-0", "-translate-y-5");
                setTimeout(() => {
                    menu.classList.add("hidden");
                }, 300); // Wait for animation to finish before hiding
            }
        }
    </script>

</head>
<body class="bg-gray-100 overflow-x-hidden">

    <!-- Top Navigation Bar -->
    <nav class="bg-white shadow-md fixed top-0 left-0 w-full flex items-center justify-between px-6 py-3 z-40">
        <!-- Left Section: Logo & Menu Button -->
        <div class="flex items-center space-x-4">
            <!-- Tailwind CSS Logo -->
            <svg class="w-8 h-8 text-indigo-500" viewBox="0 0 100 100" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M50 20C38 20 31 27 28 41C33 34 39 31 46 31C52 31 56 34 60 40C64 46 68 49 74 49C82 49 87 44 90 34C84 41 78 44 72 44C66 44 62 41 58 35C54 29 50 26 44 26C36 26 31 31 28 41M28 60C22 60 17 65 14 75C20 68 26 65 32 65C38 65 42 68 46 74C50 80 54 83 60 83C68 83 73 78 76 68C70 75 64 78 58 78C52 78 48 75 44 69C40 63 36 60 30 60H28Z"/>
            </svg>

            <!-- Hamburger Menu -->
            <button onclick="toggleSidebar()" class="text-gray-600 hover:text-gray-900">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Search Bar (Hidden on Small Screens) -->
        <div class="hidden md:block flex-1 mx-6">
            <input type="text" placeholder="Search projects..." class="w-full bg-gray-100 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Navigation Links (Hidden on Small Screens) -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="#" class="text-gray-600 hover:text-gray-900">Documentation</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">Community</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">Support</a>
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-indigo-700">
                + New Project
            </button>
        </div>

        <a href="{{ route('login') }}" class="bg-green-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-gray-700 ml-4">Login</a>

        <!-- Mobile Documentation Menu Button (⬅) -->
        <button onclick="toggleMobileMenu()" class="md:hidden text-gray-600 hover:text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 4.5-15 15m0 0h11.25m-11.25 0V8.25" />
            </svg>
        </button>
    </nav>

    <!-- Mobile Documentation Menu (Dropdown with Animation) -->
    <div id="mobileMenu" class="hidden fixed top-14 left-0 w-full bg-white shadow-md py-3 px-6 transition-all duration-300 ease-in-out opacity-0 -translate-y-5 z-50">
        <a href="#" class="block py-2 text-gray-600 hover:text-gray-900">Documentation</a>
        <a href="#" class="block py-2 text-gray-600 hover:text-gray-900">Community</a>
        <a href="#" class="block py-2 text-gray-600 hover:text-gray-900">Support</a>
        <button class="w-full bg-indigo-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-indigo-700">
            + New Project
        </button>
    </div>

    <!-- Sidebar (Initially Hidden) -->
    <div id="sidebar" class="w-64 min-h-screen bg-white shadow-md p-5 fixed left-0 top-0 transition-transform transform -translate-x-full duration-300 ease-in-out z-50">
        <!-- Close Button -->
        <button onclick="toggleSidebar()" class="absolute top-3 right-3 p-1 text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </button>

        <!-- Sidebar Content -->
        <div class="flex items-center space-x-2 mb-5">
            <svg class="w-10 h-10 text-indigo-500" viewBox="0 0 100 100" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M50 20C38 20 31 27 28 41C33 34 39 31 46 31C52 31 56 34 60 40C64 46 68 49 74 49C82 49 87 44 90 34C84 41 78 44 72 44C66 44 62 41 58 35C54 29 50 26 44 26C36 26 31 31 28 41M28 60C22 60 17 65 14 75C20 68 26 65 32 65C38 65 42 68 46 74C50 80 54 83 60 83C68 83 73 78 76 68C70 75 64 78 58 78C52 78 48 75 44 69C40 63 36 60 30 60H28Z"/>
            </svg>
        </div>

        <!-- Navigation -->
        <nav class="space-y-2">
            <!-- Navigation -->
            <nav class="space-y-2">
                <a href="#" class="flex items-center space-x-3 text-indigo-600 bg-indigo-50 p-2 rounded-md">
                    <svg class="w-5 h-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M4 10v10h5v-6h6v6h5V10"></path>
                    </svg>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="#" class="flex items-center space-x-3 text-gray-600 p-2 hover:bg-gray-100 rounded-md">
                    <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V9a2 2 0 00-2-2h-6M9 14H4V4h10v10m-7 2v6m-3-3h6"></path>
                    </svg>
                    <span class="font-medium">Team</span>
                </a>
                <a href="#" class="flex items-center space-x-3 text-gray-600 p-2 hover:bg-gray-100 rounded-md">
                    <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21v-6m4 6v-6m5 6v-6M9 3l3 3m0 0l3-3m-3 3V3"></path>
                    </svg>
                    <span class="font-medium">Projects</span>
                </a>
            </nav>

            <!-- Teams -->
            <div class="mt-5">
                <h2 class="text-gray-500 text-sm font-semibold mb-2">Your teams</h2>
                <div class="space-y-2">
                    <a href="#" class="flex items-center space-x-3 text-gray-600 p-2 hover:bg-gray-100 rounded-md">
                        <span class="w-6 h-6 flex items-center justify-center bg-gray-200 rounded-full text-sm">H</span>
                        <span class="font-medium">Heroicons</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-gray-600 p-2 hover:bg-gray-100 rounded-md">
                        <span class="w-6 h-6 flex items-center justify-center bg-gray-200 rounded-full text-sm">T</span>
                        <span class="font-medium">Tailwind Labs</span>
                    </a>
                </div>
            </div>

            <!-- Profile -->
            <div class="absolute bottom-5 left-5 flex items-center space-x-3">
                <img src="https://placehold.co/40" alt="Profile" class="w-10 h-10 rounded-full">
                <span class="font-medium">Tom Cook</span>
            </div>
        </nav>
    </div>

    <main id="mainContent" class="transition-all duration-300 ease-in-out p-6 mt-16">
        <h1 class="text-2xl font-bold text-gray-800">Welcome to Your Dashboard</h1>
        <p class="mt-4 text-gray-600">This is where the main content of your application will be displayed.</p>
    </main>


</body>
</html>
