<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Homepage data
        $hero = [
            'title' => 'Discover Your Perfect Getaway',
            'subtitle' => 'Find and book the best hotels worldwide',
            'cta' => 'Find Hotels',
            'image' => 'https://image.pollinations.ai/prompt/modern%20luxury%20hotel%20lobby%20with%20elegant%20furniture%20and%20large%20windows/1920/1080'
        ];

        $featuredHotels = [
            [
                'id' => 1,
                'name' => 'The Grand Plaza',
                'location' => 'New York, USA',
                'rating' => 4.9,
                'price' => 299,
                'image' => 'https://image.pollinations.ai/prompt/luxury%20hotel%20room%20with%20modern%20furniture%20and%20large%20window%20view/800/600'
            ],
            [
                'id' => 2,
                'name' => 'Ocean View Resort',
                'location' => 'Miami, USA',
                'rating' => 4.8,
                'price' => 249,
                'image' => 'https://image.pollinations.ai/prompt/beachfront%20hotel%20room%20with%20ocean%20view%20and%20modern%20furniture/800/600'
            ],
            [
                'id' => 3,
                'name' => 'Mountain Retreat',
                'location' => 'Aspen, USA',
                'rating' => 4.7,
                'price' => 349,
                'image' => 'https://image.pollinations.ai/prompt/mountain%20view%20hotel%20room%20with%20modern%20furniture%20and%20large%20windows/800/600'
            ]
        ];

        $testimonials = [
            [
                'name' => 'Sarah Johnson',
                'text' => 'The booking process was seamless and the hotel exceeded our expectations. We will definitely be returning!',
                'rating' => 5,
                'image' => 'https://image.pollinations.ai/prompt/professional%20business%20woman%20headshot%20smiling%20at%20camera/100/100'
            ],
            [
                'name' => 'Michael Chen',
                'text' => 'Found the perfect hotel for our family vacation. The staff was incredibly friendly and helpful.',
                'rating' => 5,
                'image' => 'https://image.pollinations.ai/prompt/professional%20business%20man%20headshot%20smiling%20at%20camera/100/100'
            ]
        ];

        return view('welcome', compact('hero', 'featuredHotels', 'testimonials'));
    }

    public function hotels()
    {
        // Hotels listing data
        $hotels = [
            [
                'id' => 1,
                'name' => 'The Grand Plaza',
                'location' => 'New York, USA',
                'rating' => 4.9,
                'price' => 299,
                'amenities' => ['WiFi', 'Pool', 'Spa', 'Restaurant'],
                'image' => 'https://image.pollinations.ai/prompt/luxury%20hotel%20lobby%20with%20modern%20furniture%20and%20large%20windows/800/600'
            ],
            [
                'id' => 2,
                'name' => 'Ocean View Resort',
                'location' => 'Miami, USA',
                'rating' => 4.8,
                'price' => 249,
                'amenities' => ['WiFi', 'Beach Access', 'Pool', 'Bar'],
                'image' => 'https://image.pollinations.ai/prompt/beachfront%20hotel%20lobby%20with%20modern%20furniture%20and%20ocean%20view/800/600'
            ],
            [
                'id' => 3,
                'name' => 'Mountain Retreat',
                'location' => 'Aspen, USA',
                'rating' => 4.7,
                'price' => 349,
                'amenities' => ['WiFi', 'Spa', 'Restaurant', 'Ski Access'],
                'image' => 'https://image.pollinations.ai/prompt/mountain%20view%20hotel%20lobby%20with%20modern%20furniture%20and%20large%20windows/800/600'
            ],
            [
                'id' => 4,
                'name' => 'City Center Hotel',
                'location' => 'Chicago, USA',
                'rating' => 4.6,
                'price' => 199,
                'amenities' => ['WiFi', 'Gym', 'Restaurant', 'Bar'],
                'image' => 'https://image.pollinations.ai/prompt/modern%20hotel%20lobby%20in%20city%20center%20with%20large%20windows/800/600'
            ],
            [
                'id' => 5,
                'name' => 'Riverside Inn',
                'location' => 'Nashville, USA',
                'rating' => 4.5,
                'price' => 179,
                'amenities' => ['WiFi', 'Pool', 'Restaurant', 'Bar'],
                'image' => 'https://image.pollinations.ai/prompt/riverside%20hotel%20lobby%20with%20modern%20furniture%20and%20river%20view/800/600'
            ],
            [
                'id' => 6,
                'name' => 'Desert Oasis',
                'location' => 'Phoenix, USA',
                'rating' => 4.4,
                'price' => 149,
                'amenities' => ['WiFi', 'Pool', 'Spa', 'Restaurant'],
                'image' => 'https://image.pollinations.ai/prompt/desert%20hotel%20lobby%20with%20modern%20furniture%20and%20large%20windows/800/600'
            ]
        ];

        return view('hotels.index', compact('hotels'));
    }

    public function hotelDetails($id)
    {
        // Hotel details data
        $hotels = [
            1 => [
                'id' => 1,
                'name' => 'The Grand Plaza',
                'location' => 'New York, USA',
                'rating' => 4.9,
                'price' => 299,
                'description' => 'Experience luxury at its finest at The Grand Plaza. Our hotel offers spacious rooms with modern amenities, an on-site restaurant serving gourmet cuisine, and a state-of-the-art fitness center.',
                'amenities' => ['WiFi', 'Pool', 'Spa', 'Restaurant', 'Room Service', '24/7 Front Desk', 'Business Center', 'Airport Shuttle'],
                'images' => [
                    'https://image.pollinations.ai/prompt/luxury%20hotel%20room%20with%20modern%20furniture%20and%20large%20window%20view/800/600',
                    'https://image.pollinations.ai/prompt/luxury%20hotel%20lobby%20with%20modern%20furniture%20and%20large%20windows/800/600',
                    'https://image.pollinations.ai/prompt/luxury%20hotel%20pool%20area%20with%20modern%20furniture%20and%20large%20windows/800/600'
                ],
                'rooms' => [
                    ['type' => 'Deluxe Room', 'price' => 299, 'description' => 'Spacious room with modern amenities'],
                    ['type' => 'Suite', 'price' => 499, 'description' => 'Luxurious suite with separate living area'],
                    ['type' => 'Family Room', 'price' => 399, 'description' => 'Comfortable room for families']
                ]
            ],
            2 => [
                'id' => 2,
                'name' => 'Ocean View Resort',
                'location' => 'Miami, USA',
                'rating' => 4.8,
                'price' => 249,
                'description' => 'Escape to paradise at Ocean View Resort. Our beachfront location offers stunning ocean views, a private beach area, and a variety of water sports activities.',
                'amenities' => ['WiFi', 'Beach Access', 'Pool', 'Bar', 'Water Sports', 'Restaurant', 'Spa', '24/7 Front Desk'],
                'images' => [
                    'https://image.pollinations.ai/prompt/beachfront%20hotel%20room%20with%20ocean%20view%20and%20modern%20furniture/800/600',
                    'https://image.pollinations.ai/prompt/beachfront%20hotel%20lobby%20with%20modern%20furniture%20and%20ocean%20view/800/600',
                    'https://image.pollinations.ai/prompt/beachfront%20hotel%20pool%20area%20with%20modern%20furniture%20and%20ocean%20view/800/600'
                ],
                'rooms' => [
                    ['type' => 'Ocean View Room', 'price' => 249, 'description' => 'Room with stunning ocean views'],
                    ['type' => 'Beachfront Suite', 'price' => 399, 'description' => 'Luxurious suite with direct beach access'],
                    ['type' => 'Family Room', 'price' => 299, 'description' => 'Comfortable room for families']
                ]
            ],
            3 => [
                'id' => 3,
                'name' => 'Mountain Retreat',
                'location' => 'Aspen, USA',
                'rating' => 4.7,
                'price' => 349,
                'description' => 'Find peace and relaxation at Mountain Retreat. Our mountain location offers stunning views, a variety of outdoor activities, and a spa for ultimate relaxation.',
                'amenities' => ['WiFi', 'Spa', 'Restaurant', 'Ski Access', 'Hiking Trails', '24/7 Front Desk', 'Fitness Center', 'Airport Shuttle'],
                'images' => [
                    'https://image.pollinations.ai/prompt/mountain%20view%20hotel%20room%20with%20modern%20furniture%20and%20large%20windows/800/600',
                    'https://image.pollinations.ai/prompt/mountain%20view%20hotel%20lobby%20with%20modern%20furniture%20and%20large%20windows/800/600',
                    'https://image.pollinations.ai/prompt/mountain%20view%20hotel%20pool%20area%20with%20modern%20furniture%20and%20large%20windows/800/600'
                ],
                'rooms' => [
                    ['type' => 'Mountain View Room', 'price' => 349, 'description' => 'Room with stunning mountain views'],
                    ['type' => 'Ski-in/Ski-out Suite', 'price' => 499, 'description' => 'Luxurious suite with direct ski access'],
                    ['type' => 'Family Room', 'price' => 399, 'description' => 'Comfortable room for families']
                ]
            ]
        ];

        $hotel = $hotels[$id] ?? null;

        if (!$hotel) {
            abort(404);
        }

        return view('hotel-details', compact('hotel'));
    }

    public function createBooking(Request $request)
    {
        // Validate booking data
        $validatedData = $request->validate([
            'hotel_id' => 'required|integer',
            'room_type' => 'required|string',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'guests' => 'required|integer|min:1',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'special_requests' => 'nullable|string|max:1000'
        ]);

        // In a real application, you would save this to the database
        // For this prototype, we'll just return a success response

        return response()->json([
            'success' => true,
            'message' => 'Booking created successfully!',
            'booking' => $validatedData
        ]);
    }

}
