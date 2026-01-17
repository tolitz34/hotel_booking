@extends('layouts.app')

@section('title', 'Search Hotels')

@section('content')
    <div class="flex flex-col md:flex-row gap-8">
        <div class="w-full md:w-1/4">
            <div class="bg-white p-6 rounded-xl shadow-md">
                <h2 class="text-xl font-bold mb-6">Filters</h2>

                <div class="mb-6">
                    <h3 class="font-semibold mb-3">Price Range</h3>
                    <div class="flex items-center gap-4">
                        <input type="range" min="0" max="1000" value="500" class="w-full" id="priceRange">
                        <span id="priceValue" class="font-medium">$500</span>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="font-semibold mb-3">Star Rating</h3>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>5 Stars</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>4 Stars</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>3 Stars</span>
                        </label>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="font-semibold mb-3">Amenities</h3>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>WiFi</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>Pool</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>Parking</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>Restaurant</span>
                        </label>
                    </div>
                </div>

                <button class="w-full bg-primary hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition duration-300">Apply Filters</button>
            </div>
        </div>

        <div class="w-full md:w-3/4">
            <div class="mb-6 flex justify-between items-center">
                <h1 class="text-2xl font-bold">Available Hotels</h1>
                <div class="flex items-center">
                    <span class="mr-2">Sort by:</span>
                    <select class="px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Rating</option>
                    </select>
                </div>
            </div>

            <div class="space-y-6">
                @foreach($hotels as $hotel)
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="{{ $hotel['image'] }}" alt="{{ $hotel['name'] }}" class="w-full h-48 md:h-full object-cover">
                    </div>
                    <div class="p-6 md:w-2/3">
                        <div class="flex justify-between items-start mb-2">
                            <h2 class="text-xl font-bold">{{ $hotel['name'] }}</h2>
                            <div class="flex items-center">
                                @for($i = 0; $i < $hotel['rating']; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                                <span class="ml-1 text-gray-600">({{ $hotel['rating'] }})</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">{{ $hotel['location'] }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($hotel['amenities'] as $amenity)
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">{{ $amenity }}</span>
                            @endforeach
                        </div>
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="text-gray-600">Starting from</p>
                                <p class="text-2xl font-bold text-primary">${{ $hotel['price'] }}<span class="text-base font-normal text-gray-600">/night</span></p>
                            </div>
                            <a href="{{ route('hotel.details', $hotel['id']) }}" class="bg-secondary hover:bg-green-600 text-white px-6 py-2 rounded-lg font-medium transition duration-300">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-8 flex justify-center">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-50">Previous</a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300 hover:bg-gray-50">1</a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300 hover:bg-gray-50">2</a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300 hover:bg-gray-50">3</a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-50">Next</a>
                </nav>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#priceRange').on('input', function() {
                $('#priceValue').text('$' + $(this).val());
            });
        });
    </script>
@endsection