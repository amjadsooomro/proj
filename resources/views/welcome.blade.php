<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CenterPoint LMS - Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans text-black">

    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-600">CenterPoint LMS</h1>
        <div>
            <a href="{{ route('login') }}"
               class="px-4 py-2 text-black hover:text-blue-600 transition">Login</a>
            <a href="{{ route('register') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Register</a>
        </div>
    </nav>

    {{-- ✅ Success Message --}}
    @if(session('success'))
        <div class="bg-green-500 text-white p-3 text-center">
            {{ session('success') }}
        </div>
    @endif

    <!-- Hero Section -->
    <section class="flex items-center justify-center min-h-[70vh] bg-gradient-to-r from-blue-500 to-indigo-600">
        <div class="text-center text-white">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                Welcome to CenterPoint LMS
            </h2>
            <p class="mb-6 text-lg">
                Learn Anytime, Anywhere with our courses.
            </p>
            <a href="{{ route('register') }}"
               class="px-6 py-3 bg-yellow-400 text-black rounded-lg font-semibold shadow hover:bg-yellow-500 transition inline-block">
               🚀 Get Started
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 px-6 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <div>
                <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-100 text-3xl mx-auto mb-4 shadow">
                    📚
                </div>
                <h3 class="text-xl font-semibold mb-2">Courses</h3>
                <p>Access hundreds of courses across multiple categories.</p>
            </div>
            <div>
                <div class="w-20 h-20 flex items-center justify-center rounded-full bg-green-100 text-3xl mx-auto mb-4 shadow">
                    👩‍🏫
                </div>
                <h3 class="text-xl font-semibold mb-2">Expert Teachers</h3>
                <p>Learn from industry experts with years of experience.</p>
            </div>
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
        <p>&copy; {{ date('Y') }} <span class="font-semibold">CenterPoint LMS</span>. All Rights Reserved.</p>
    </footer>

</body>
</html>
