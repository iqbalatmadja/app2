@extends('layouts.app')
@section('title', 'Register')
@section('navbar')
    @include('partials.navbar')
@endsection

@section('leftbar')
    @include('partials.leftbar')
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
    {{ Auth::check() }}

HOME
<?php
$name = Route::currentRouteName();
echo $name;
?>


@endsection

@section('footer')
@endsection
