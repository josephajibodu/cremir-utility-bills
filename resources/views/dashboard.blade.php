@extends('layouts.app')

@section('title', 'Buy Airtime, Data and make Bills payments and get cash rewards.')

@section('content')
    <div class="grid lg:grid-cols-3 gap-6">

        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">My Balance</p>
                    <button type="button" class="btn bg-dark text-white"><i class="mgc_add_fill text-base me-4"></i> Add Funds</button>
                </div>

                <div class="p-6 flex flex-col items-center gap-6">
                    <div class="flex items-center justify-center gap-16">
                        <div class="text-center space-y-3">
                            <span class="text-sm">Available Balance <i data-feather="info" class="h-4 w-4 inline"></i></span>
                            <h4 class="text-4xl text-gray-700 dark:text-gray-300 font-bold">&#8358;4,999.80</h4>
                        </div>

                        <div class="text-center space-y-3">
                            <span class="text-sm">Bonus/Cash Back <i data-feather="info" class="h-4 w-4 inline"></i></span>
                            <h4 class="text-4xl text-gray-700 dark:text-gray-300 font-bold">&#8358;299.00</h4>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <button type="button" class="btn bg-light text-slate-900 dark:text-slate-200"><i class="mgc_add_fill text-base me-4"></i> Add Funds</button>
                        <a href="#" type="button" class="btn bg-light text-slate-900 dark:text-slate-200"><i class="mgc_bank_card_line text-base me-4"></i> History</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">Buy airtime, data and pay bills</p>
                </div>

                <div class="p-6">
                    <div class="flex gap-16">
                        <!-- airtime -->
                        <a href="#">
                            <div class="border-2 border p-6 rounded-xl">
                                <x-icons.airtime class="w-14 h-14" />
                                <h3 class="text-xl mt-4">Buy Airtime</h3>
                                <p class="text-base">Stay connected with your family and friends with instant top-ups</p>
                            </div>
                        </a>

                        <!-- data -->
                        <a href="#">
                            <div class="border-2 border p-6 rounded-xl">
                                <x-icons.data class="w-14 h-14" />
                                <h3 class="text-xl mt-4">Buy Data</h3>
                                <p class="text-base">Enjoy uninterrupted internet access with easy and convenient mobile data top-ups.</p>
                            </div>
                        </a>

                        <!-- bills -->
                        <a href="#">
                            <div class="border-2 border p-6 rounded-xl">
                                <x-icons.bills class="w-14 h-14" />
                                <h3 class="text-xl mt-4">Pay Bills</h3>
                                <p class="text-base">Pay for your internet, cables, subscriptions and other utility bills all in one place.</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <!-- Transactions -->
        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">Recent Transactions</p>
                    <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-100 text-gray-800"><i class="mgc_copy_2_line"></i> Copy Account Number</span>
                </div>

                <div class="p-6">

                    <div class="overflow-x-auto">
                        <div class="min-w-full inline-block align-middle">
                            <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
