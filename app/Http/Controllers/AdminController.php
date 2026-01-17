<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $stats = [
            'total_hotels' => 42,
            'total_bookings' => 128,
            'revenue' => 12450,
            'active_users' => 38
        ];

        $recent_bookings = [
            ['hotel' => 'Luxury Resort', 'customer' => 'John Doe', 'date' => '2023-11-15', 'status' => 'Confirmed'],
            ['hotel' => 'City Hotel', 'customer' => 'Jane Smith', 'date' => '2023-11-14', 'status' => 'Confirmed'],
            ['hotel' => 'Beach Paradise', 'customer' => 'Mike Johnson', 'date' => '2023-11-13', 'status' => 'Pending'],
            ['hotel' => 'Mountain Lodge', 'customer' => 'Sarah Williams', 'date' => '2023-11-12', 'status' => 'Cancelled'],
        ];

        $popular_hotels = [
            ['name' => 'Luxury Resort', 'bookings' => 32, 'revenue' => 8500],
            ['name' => 'City Hotel', 'bookings' => 28, 'revenue' => 6400],
            ['name' => 'Beach Paradise', 'bookings' => 15, 'revenue' => 3200],
            ['name' => 'Mountain Lodge', 'bookings' => 12, 'revenue' => 2500],
        ];

        return view('admin.dashboard', compact('stats', 'recent_bookings', 'popular_hotels'));
    }

    public function hotels()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $hotels = [
            [
                'id' => 1,
                'name' => 'Luxury Resort',
                'location' => 'Maldives',
                'rating' => 5,
                'price' => 350,
                'status' => 'Active'
            ],
            [
                'id' => 2,
                'name' => 'City Hotel',
                'location' => 'New York',
                'rating' => 4,
                'price' => 220,
                'status' => 'Active'
            ],
            [
                'id' => 3,
                'name' => 'Beach Paradise',
                'location' => 'Bali',
                'rating' => 4,
                'price' => 180,
                'status' => 'Pending'
            ],
            [
                'id' => 4,
                'name' => 'Mountain Lodge',
                'location' => 'Switzerland',
                'rating' => 5,
                'price' => 400,
                'status' => 'Active'
            ],
        ];

        return view('admin.hotels.index', compact('hotels'));
    }

    public function bookings()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $bookings = [
            [
                'id' => 1,
                'hotel' => 'Luxury Resort',
                'customer' => 'John Doe',
                'check_in' => '2023-11-15',
                'check_out' => '2023-11-20',
                'status' => 'Confirmed',
                'total' => 1400
            ],
            [
                'id' => 2,
                'hotel' => 'City Hotel',
                'customer' => 'Jane Smith',
                'check_in' => '2023-11-14',
                'check_out' => '2023-11-18',
                'status' => 'Confirmed',
                'total' => 960
            ],
            [
                'id' => 3,
                'hotel' => 'Beach Paradise',
                'customer' => 'Mike Johnson',
                'check_in' => '2023-11-13',
                'check_out' => '2023-11-17',
                'status' => 'Pending',
                'total' => 720
            ],
            [
                'id' => 4,
                'hotel' => 'Mountain Lodge',
                'customer' => 'Sarah Williams',
                'check_in' => '2023-11-12',
                'check_out' => '2023-11-16',
                'status' => 'Cancelled',
                'total' => 1600
            ],
        ];

        return view('admin.bookings.index', compact('bookings'));
    }

    public function users()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $users = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'role' => 'Customer',
                'status' => 'Active'
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'role' => 'Customer',
                'status' => 'Active'
            ],
            [
                'id' => 3,
                'name' => 'Mike Johnson',
                'email' => 'mike@example.com',
                'role' => 'Customer',
                'status' => 'Active'
            ],
            [
                'id' => 4,
                'name' => 'Sarah Williams',
                'email' => 'sarah@example.com',
                'role' => 'Customer',
                'status' => 'Active'
            ],
        ];

        return view('admin.users.index', compact('users'));
    }
}