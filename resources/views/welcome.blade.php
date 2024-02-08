@extends('layouts.app')

@section('title', 'Buy Airtime, Data and make Bills payments and get cash rewards.')

@section('content')
    <div class="p-6 flex flex-col gap-6">
        <h3>Welcome to FlitBill</h3>
        <a class="block" href="{{ route('login') }}">Login</a>
        <a class="block" href="{{ route('register') }}">Register</a>
    </div>
@endsection
