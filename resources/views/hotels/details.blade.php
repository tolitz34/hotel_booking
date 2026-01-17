@extends('layouts.app')

@section('title', $hotel['name'])

@section('content')
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img src="{{ $hotel['image'] }}" alt="{{ $hotel['name'] }}" class="w-full h-96 object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-8">
                <h1 class="text-3xl font-bold text-white">{{ $hotel['name'] }}</h1>
                <div class="flex items-center mt-2">
                    @for($i = 0; $i < $hotel['rating']; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @endfor
                    <span class="ml-2 text-white">({{ $hotel['rating'] }})</span>
                </div>
            </div>
        </div>

        <div class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-2">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold mb-4">About the Hotel</h2>
                        <p class="text-gray-700 leading-relaxed">{{ $hotel['description'] }}</p>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-bold mb-4">Amenities</h2>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach($hotel['amenities'] as $amenity)
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">{{ $amenity }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-bold mb-4">Room Types</h2>
                        <div class="space-y-6">
                            @foreach($hotel['rooms'] as $room)
                                <div class="bg-gray-50 rounded-lg p-6">
                                    <div class="flex justify-between items-start mb-4">
                                        <h3 class="text-xl font-semibold">{{ $room['type'] }}</h3>
                                        <span class="text-2xl font-bold text-primary">${{ $room['price'] }}<span class="text-base font-normal text-gray-600">/night</span></span>
                                    </div>
                                    <p class="text-gray-600 mb-4">{{ $room['description'] }}</p>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($room['features'] as $feature)
                                            <span class="bg-white text-gray-800 text-xs px-2 py-1 rounded-full border border-gray-200">{{ $feature }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold mb-4">Guest Reviews</h2>
                        <div class="space-y-4">
                            @foreach($hotel['reviews'] as $review)
                                <div class="bg-gray-50 rounded-lg p-6">
                                    <div class="flex justify-between items-start mb-2">
                                        <div>
                                            <h4 class="font-semibold">{{ $review['name'] }}</h4>
                                            <div class="flex items-center mt-1">
                                                @for($i = 0; $i < $review['rating']; $i++)
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                @endfor
                                            </div>
                                        </div>
                                        <span class="text-gray-500 text-sm">{{ $review['date'] }}</span>
                                    </div>
                                    <p class="text-gray-700">{{ $review['comment'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-gray-50 rounded-lg p-6 sticky top-8">
                        <h2 class="text-2xl font-bold mb-4">Book Now</h2>
                        <form action="{{ route('bookings.create') }}" method="POST">
                            @csrf
                            <input type="hidden" name="hotel_id" value="{{ $hotel['id'] }}">

                            <div class="mb-4">
                                <label for="room_type" class="block text-sm font-medium text-gray-700 mb-1">Room Type</label>
                                <select id="room_type" name="room_type" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                                    @foreach($hotel['rooms'] as $room)
                                        <option value="{{ $room['type'] }}">{{ $room['type'] }} - ${{ $room['price'] }}/night</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="checkin" class="block text-sm font-medium text-gray-700 mb-1">Check-in Date</label>
                                <input type="date" id="checkin" name="checkin" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>

                            <div class="mb-4">
                                <label for="checkout" class="block text-sm font-medium text-gray-700 mb-1">Check-out Date</label>
                                <input type="date" id="checkout" name="checkout" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>

                            <div class="mb-4">
                                <label for="guests" class="block text-sm font-medium text-gray-700 mb-1">Guests</label>
                                <input type="number" id="guests" name="guests" min="1" value="1" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>

                            <div class="mb-6">
                                <h3 class="font-semibold mb-2">Price Details</h3>
                                <div class="flex justify-between mb-2">
                                    <span>Base Price</span>
                                    <span id="basePrice">$0</span>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <span>Taxes and Fees</span>
                                    <span id="taxes">$0</span>
                                </div>
                                <div class="flex justify-between font-bold text-lg pt-2 border-t border-gray-200">
                                    <span>Total</span>
                                    <span id="totalPrice">$0</span>
                                </div>
                            </div>

                            <button type="submit" class="w-full bg-secondary hover:bg-green-600 text-white px-6 py-3 rounded-lg font-medium transition duration-300 text-lg">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Calculate prices when form changes
            function updatePrices() {
                const roomType = $('#room_type').val();
                const checkin = $('#checkin').val();
                const checkout = $('#checkout').val();

                if (roomType && checkin && checkout) {
                    // In a real app, you would fetch this from the server
                    // For demo purposes, we'll use hardcoded values
                    const roomPrice = parseFloat(roomType.split('$')[1].split('/')[0]);
                    const days = Math.ceil((new Date(checkout) - new Date(checkin)) / (1000 * 60 * 60 * 24));

                    const basePrice = roomPrice * days;
                    const taxes = basePrice * 0.15;
                    const totalPrice = basePrice + taxes;

                    $('#basePrice').text('$' + basePrice.toFixed(2));
                    $('#taxes').text('$' + taxes.toFixed(2));
                    $('#totalPrice').text('$' + totalPrice.toFixed(2));
                }
            }

            $('#room_type, #checkin, #checkout').on('change', updatePrices);
        });
    </script>
@endsection