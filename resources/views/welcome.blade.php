<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS - Landing Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans text-black">

    <!-- Navbar -->
<!-- Navbar -->
<nav class="bg-white shadow-md p-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-blue-600">My LMS</h1>
    <div>
        <a href="{{ route('login') }}"
           class="px-4 py-2 text-black hover:text-blue-600 transition">Login</a>
        <a href="{{ route('register') }}"
           class="px-4 py-2 bg-blue-600 text-black rounded-lg hover:bg-blue-700 transition">Register</a>
    </div>
</nav>
<!-- Hero Section -->
<section class="flex items-center justify-center min-h-[70vh] bg-gradient-to-r from-blue-500 to-indigo-600">
    <div class="text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 text-black">
            Welcome to Our Learning Management System
        </h2>
        <p class="mb-6 text-lg text-black">
            Learn Anytime, Anywhere with our courses.
        </p>
        <a href="{{ route('register') }}"
           class="px-6 py-3 bg-yellow-400 text-black rounded-lg font-semibold shadow hover:bg-yellow-500 transition inline-block">
           🚀 Get Started
        </a>
    </div>
</section>



    <!-- Features Section (Row Layout) -->
    <section class="py-16 px-6 max-w-6xl mx-auto">
        <div class="flex justify-center items-start gap-16 text-center">

            <!-- Courses -->
            <div>
                <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-100 text-3xl mx-auto mb-4 shadow">
                    📚
                </div>
                <h3 class="text-xl font-semibold mb-2">Courses</h3>
                <p>Access hundreds of courses across multiple categories.</p>
            </div>

            <!-- Teachers -->
            <div>
                <div class="w-20 h-20 flex items-center justify-center rounded-full bg-green-100 text-3xl mx-auto mb-4 shadow">
                    👩‍🏫
                </div>
                <h3 class="text-xl font-semibold mb-2">Expert Teachers</h3>
                <p>Learn from industry experts with years of experience.</p>
            </div>

            <!-- Progress -->
            <div>
                <div class="w-20 h-20 flex items-center justify-center rounded-full bg-purple-100 text-3xl mx-auto mb-4 shadow">
                    📈
                </div>
                <h3 class="text-xl font-semibold mb-2">Progress Tracking</h3>
                <p>Track your learning journey with detailed analytics.</p>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-300 text-black text-center py-6 mt-10">
        <p>&copy; {{ date('Y') }} <span class="font-semibold">My LMS</span>. All Rights Reserved.</p>
    </footer>

</body>
</html>
