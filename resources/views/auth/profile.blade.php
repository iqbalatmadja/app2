@extends('layouts.app')
@section('title', 'Profile')
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
    <div class="h-screen bg-blue-100 py-10 p-4 md:p-20 lg:p-16">
        <div class="max-w-sm bg-white rounded-3xl overflow-hidden shadow-2xl mx-auto">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Profile</h2>
                <p class="text-gray-700 mb-0"></p>
                <form action="{{ route('profileupdate') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="username">
                        Name
                        </label>
                        <input class="@error('name') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Name" value="{{ $user->name }}">
                        @if ($errors->has('name'))
                            <span class="text-base text-center text-orange-600 font-bold">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="username">
                        Email
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-slate-200" disabled type="email" placeholder="Email Address" value="{{ $user->email }}">
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

@section('footer')
@endsection
