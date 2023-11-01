@extends('layouts.app')
@section('title', 'Roles')
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
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Roles</h2>
                <p class="text-gray-700 mb-0"></p>
                xxxx
            </div>
        </div>
    </div>


@endsection

@section('footer')
@endsection
