<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hotel Booking Platform')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        accent: '#F59E0B',
                        dark: '#1E293B',
                        light: '#F8FAFC'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-primary">HotelBook</a>
            <nav>
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary px-3 py-2">Home</a>
                <a href="{{ route('hotels') }}" class="text-gray-700 hover:text-primary px-3 py-2">Hotels</a>
                <a href="{{ route('admin.login') }}" class="text-gray-700 hover:text-primary px-3 py-2">Admin</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-dark text-white mt-12">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">HotelBook</h3>
                    <p class="text-gray-300">Your ultimate hotel booking platform</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="{{ route('hotels') }}" class="text-gray-300 hover:text-white">Hotels</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Hotel Search</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Booking</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <p class="text-gray-300">123 Travel Street, City</p>
                    <p class="text-gray-300">info@hotelbook.com</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© {{ date('Y') }} HotelBook. All rights reserved. Made with ❤️ by LaraCopilot</p>
            </div>
        </div>
    </footer>
</body>
</html>