@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-2xl p-8 mb-12 shadow-lg">
        <h1 class="text-4xl font-bold mb-4">Find Your Perfect Stay</h1>
        <p class="text-xl mb-6">Discover amazing hotels at the best prices</p>
        <form action="{{ route('hotels') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label for="location" class="block text-sm font-medium mb-1">Location</label>
                <input type="text" id="location" name="location" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Where are you going?">
            </div>
            <div>
                <label for="checkin" class="block text-sm font-medium mb-1">Check-in</label>
                <input type="date" id="checkin" name="checkin" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
            </div>
            <div>
                <label for="checkout" class="block text-sm font-medium mb-1">Check-out</label>
                <input type="date" id="checkout" name="checkout" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
            </div>
            <div class="flex items-end">
                <button type="submit" class="w-full bg-secondary hover:bg-green-600 text-white px-6 py-3 rounded-lg font-medium transition duration-300">Search Hotels</button>
            </div>
        </form>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6">Popular Destinations</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="https://image.pollinations.ai/prompt/beautiful%20beach%20resort%20in%20Maldives%20with%20luxury%20villas%20and%20crystal%20clear%20water/800/500" alt="Maldives Resort" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Maldives</h3>
                    <p class="text-gray-600 mb-4">Experience paradise with our exclusive beach resorts</p>
                    <a href="{{ route('hotels', ['location' => 'Maldives']) }}" class="inline-block bg-primary hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition duration-300">Explore Hotels</a>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="https://image.pollinations.ai/prompt/modern%20luxury%20hotel%20in%20New%20York%20City%20with%20skyline%20view/800/500" alt="New York Hotel" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">New York</h3>
                    <p class="text-gray-600 mb-4">Stay in the heart of the city with our premium hotels</p>
                    <a href="{{ route('hotels', ['location' => 'New York']) }}" class="inline-block bg-primary hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition duration-300">Explore Hotels</a>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="https://image.pollinations.ai/prompt/romantic%20hotel%20in%20Paris%20with%20Eiffel%20Tower%20view/800/500" alt="Paris Hotel" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Paris</h3>
                    <p class="text-gray-600 mb-4">Romantic stays with stunning city views</p>
                    <a href="{{ route('hotels', ['location' => 'Paris']) }}" class="inline-block bg-primary hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition duration-300">Explore Hotels</a>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6">Why Choose Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Best Prices</h3>
                <p class="text-gray-600">We offer the most competitive rates in the industry</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Trusted Service</h3>
                <p class="text-gray-600">Over 10,000 satisfied customers worldwide</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">24/7 Support</h3>
                <p class="text-gray-600">Our team is available around the clock to assist you</p>
            </div>
        </div>
    </section>
@endsection