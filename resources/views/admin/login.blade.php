@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-8">
            <h1 class="text-2xl font-bold text-center mb-6">Admin Login</h1>

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.login.post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>

                <button type="submit" class="w-full bg-primary hover:bg-blue-700 text-white px-4 py-3 rounded-lg font-medium transition duration-300">Login</button>
            </form>

            <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                <h3 class="font-semibold mb-2">Available Admin Accounts:</h3>
                <ul class="list-disc pl-5 space-y-1">
                    <li><strong>Email:</strong> admin@business.com | <strong>Password:</strong> admin123</li>
                    <li><strong>Email:</strong> manager@business.com | <strong>Password:</strong> manager123</li>
                    <li><strong>Email:</strong> supervisor@business.com | <strong>Password:</strong> supervisor123</li>
                </ul>
            </div>
        </div>
    </div>
@endsection