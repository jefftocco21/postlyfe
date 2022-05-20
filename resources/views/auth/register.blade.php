@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="POST">
            @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name" value="" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your username" value="" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Name</label>
                    <input type="email" name="email" id="email" placeholder="Your email" value="" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" value="" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input type="passord" name="password_confirmation" id="password_confriamtion" placeholder="Re-enter password" value="" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </form>
        </div>
    </div>
@endsection
