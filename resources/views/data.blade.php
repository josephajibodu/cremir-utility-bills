@extends('layouts.app')

@section('title', 'Buy Airtime, Data and make Bills payments and get cash rewards.')

@section('content')
    <div class="grid lg:grid-cols-3 gap-6 w-full py-4">

        <div class="lg:col-span-3 space-y-6 w-full">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-10">
                    <p class="card-title">Top up your Internet Data</p>
                </div>

                @livewire('data-topup')
            </div>
        </div>

        <!-- Transaction History -->
        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6 w-full">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">Transactions</p>
                </div>

                <div class="lg:p-6">
                    @livewire('all-transactions')
                </div>

            </div>
        </div>

    </div>
@endsection
