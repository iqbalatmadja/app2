@extends('layouts.app')
@section('title', 'Login')
@section('navbar')
    @include('partials.navbar')
@endsection

@section('leftbar')
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush

@section('content')
    @if (session('msg'))
    <div class="alert alert-error font-bold">
        {{ session('msg') }}
    </div>
    @endif
    <div class="h-screen bg-blue-100 py-20 p-4 md:p-20 lg:p-32">
        <div class="max-w-sm bg-white rounded-3xl overflow-hidden shadow-2xl mx-auto">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Welcome Back!</h2>
                <p class="text-gray-700 mb-6">Please sign in to your account</p>
                <form action="{{ route('login.process') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="username">
                        Email
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="Email Address">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2" for="password">
                            Password
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Sign In
                        </button>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('register') }}">
                            Sign Up
                        </a>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('footer')
@endsection
