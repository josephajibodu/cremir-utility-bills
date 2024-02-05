@extends('layouts.app')

@section('title', 'Buy Airtime, Data and make Bills payments and get cash rewards.')

@section('content')
    <div class="grid lg:grid-cols-3 gap-6 w-full py-4">

        <div class="lg:col-span-3 space-y-6 w-full">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-10">
                    <p class="card-title">Top up your Internet Data</p>
                </div>

                <form>
                    <div class="flex flex-col lg:flex-row flex-wrap">
                        <div class="lg:w-8/12">
                            <div class="flex gap-4 lg:gap-8 mb-6">
                                <div
                                    class="border-2 rounded-xl w-full h-12 lg:w-24 lg:h-24 flex items-center justify-center group">
                                    <img class="w-[100%] saturate-0 group-hover:saturate-100"
                                        src="{{ asset('images/providers/mtn.svg') }}" />
                                </div>

                                <div
                                    class="border-2 rounded-xl w-full h-12 lg:w-24 lg:h-24 flex items-center justify-center group">
                                    <img class="w-[70%] saturate-0 group-hover:saturate-100"
                                        src="{{ asset('images/providers/airtel.svg') }}" />
                                </div>

                                <div
                                    class="border-2 rounded-xl w-full h-12 lg:w-24 lg:h-24 flex items-center justify-center group">
                                    <img class="w-[70%] saturate-0 group-hover:saturate-100"
                                        src="{{ asset('images/providers/9mobile.svg') }}" />
                                </div>

                                <div
                                    class="border-2 rounded-xl w-full h-12 lg:w-24 lg:h-24 flex items-center justify-center group">
                                    <img class="w-[70%] saturate-0 group-hover:saturate-100"
                                        src="{{ asset('images/providers/glo.svg') }}" />
                                </div>
                            </div>

                            <div class="mb-12">
                                <label for="exampleInputEmail1"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Select a
                                    Recipient</label>

                                <div class="flex w-fit">
                                    <div
                                        class="inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                                        @
                                    </div>
                                    <input type="text" placeholder="Username" autocomplete="tel" value="0816 729 7386"
                                        class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                                </div>

                                <div class="flex flex-col lg:flex-row mt-3 gap-4">
                                    <div
                                        class="inline-flex items-center gap-3 py-1 px-2 rounded-lg text-xs font-medium bg-blue-100 text-gray-800 w-fit">
                                        <small class="text-[10px]">MTN</small>
                                        <small class="text-sm">0816 729 7386</small>
                                    </div>

                                    <div
                                        class="inline-flex items-center gap-3 py-1 px-2 rounded-lg text-xs font-medium bg-blue-100 text-gray-800 w-fit">
                                        <small class="text-[10px]">GLO</small>
                                        <small class="text-sm">0816 729 7386</small>
                                    </div>

                                    <div
                                        class="inline-flex items-center gap-3 py-1 px-2 rounded-lg text-xs font-medium bg-blue-100 text-gray-800 w-fit">
                                        <small class="text-[10px]">Airtel</small>
                                        <small class="text-sm">0816 729 7386</small>
                                    </div>

                                    <div
                                        class="inline-flex items-center gap-3 py-1 px-2 rounded-lg text-xs font-medium bg-blue-100 text-gray-800 w-fit">
                                        <small class="text-[10px]">MTN</small>
                                        <small class="text-sm">0816 729 7386</small>
                                    </div>
                                </div>
                            </div>

                            <div data-fc-type="tab">
                                <nav class="flex space-x-3 border-b" aria-label="Tabs">
                                    <button data-fc-target="#tabs-with-underline-1" type="button"
                                        class="fc-tab-active:font-semibold fc-tab-active:border-primary fc-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent -mb-px transition-all text-sm whitespace-nowrap text-gray-500 hover:text-primary active">
                                        Tab One
                                    </button>
                                    <button data-fc-target="#tabs-with-underline-2" type="button"
                                        class="fc-tab-active:font-semibold fc-tab-active:border-primary fc-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent -mb-px transition-all text-sm whitespace-nowrap text-gray-500 hover:text-primary">
                                        Tab Two
                                    </button>
                                    <button data-fc-target="#tabs-with-underline-3" type="button"
                                        class="fc-tab-active:font-semibold fc-tab-active:border-primary fc-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent -mb-px transition-all text-sm whitespace-nowrap text-gray-500 hover:text-primary">
                                        Tab Three
                                    </button>
                                </nav>

                                <div class="mt-3 overflow-hidden">
                                    <div id="tabs-with-underline-1"
                                        class="active fc-tab-active:opacity-100 opacity-0 transition-all duration-300 transform"
                                        role="tabpanel" aria-labelledby="tabs-with-underline-item-1">


                                        <div class="flex flex-wrap gap-3 mb-6">
                                            <div
                                                class="inline-flex flex-col items-center gap-1.5 w-[90px] lg:w-[120px] pt-3 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 overflow-hidden">
                                                <span class="text-base font-semibold">2.5GB</span>
                                                <span class="text-xs">2 Days</span>
                                                <span class="text-xs">&#8358;2,000</span>
                                                <small class="text-[11px] text-green-500">&#8358;30 Cashback</small>
                                                <div class="bg-green-100 w-full text-center text-[10px] p-1.5">Youtube Night
                                                </div>
                                            </div>

                                            <div
                                                class="inline-flex flex-col items-center gap-1.5 w-[90px] lg:w-[120px] pt-3 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 overflow-hidden">
                                                <span class="text-base font-semibold">2.5GB</span>
                                                <span class="text-xs">2 Days</span>
                                                <span class="text-xs">&#8358;2,000</span>
                                                <span class="text-xs text-green-500">&#8358;30 Cashback</span>
                                                <div class="bg-green-100 w-full text-center p-1.5">Pay &#8358;98</div>
                                            </div>

                                            <div
                                                class="inline-flex flex-col items-center gap-1.5 w-[90px] lg:w-[120px] pt-3 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 overflow-hidden">
                                                <span class="text-base font-semibold">2.5GB</span>
                                                <span class="text-xs">2 Days</span>
                                                <span class="text-xs">&#8358;2,000</span>
                                                <span class="text-xs text-green-500">&#8358;30 Cashback</span>
                                                <div class="bg-green-100 w-full text-center p-1.5">Pay &#8358;98</div>
                                            </div>

                                            <div
                                                class="inline-flex flex-col items-center gap-1.5 w-[90px] lg:w-[120px] pt-3 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 overflow-hidden">
                                                <span class="text-base font-semibold">2.5GB</span>
                                                <span class="text-xs">2 Days</span>
                                                <span class="text-xs">&#8358;2,000</span>
                                                <span class="text-xs text-green-500">&#8358;30 Cashback</span>
                                                <div class="bg-green-100 w-full text-center p-1.5">Pay &#8358;98</div>
                                            </div>

                                        </div>

                                    </div>
                                    <div id="tabs-with-underline-2"
                                        class="hidden fc-tab-active:opacity-100 transition-all duration-300 transform opacity-0"
                                        role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
                                        <div class="flex flex-wrap gap-3 mb-6">
                                            <div
                                                class="inline-flex flex-col items-center gap-1.5 w-[90px] lg:w-[120px] pt-3 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 overflow-hidden">
                                                <span class="text-base font-semibold">2.5GB</span>
                                                <span class="text-xs">2 Months</span>
                                                <span class="text-xs">&#8358;5,000</span>
                                                <span class="text-xs text-green-500">&#8358;30 Cashback</span>
                                                <div class="bg-green-100 w-full text-center p-1.5">Pay &#8358;98</div>
                                            </div>

                                            <div
                                                class="inline-flex flex-col items-center gap-1.5 w-[90px] lg:w-[120px] pt-3 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 overflow-hidden">
                                                <span class="text-base font-semibold">2.5GB</span>
                                                <span class="text-xs">2 Days</span>
                                                <span class="text-xs">&#8358;2,000</span>
                                                <span class="text-xs text-green-500">&#8358;30 Cashback</span>
                                                <div class="bg-green-100 w-full text-center p-1.5">Pay &#8358;98</div>
                                            </div>

                                            <div
                                                class="inline-flex flex-col items-center gap-1.5 w-[90px] lg:w-[120px] pt-3 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 overflow-hidden">
                                                <span class="text-base font-semibold">2.5GB</span>
                                                <span class="text-xs">2 Days</span>
                                                <span class="text-xs">&#8358;2,000</span>
                                                <span class="text-xs text-green-500">&#8358;30 Cashback</span>
                                                <div class="bg-green-100 w-full text-center p-1.5">Pay &#8358;98</div>
                                            </div>

                                            <div
                                                class="inline-flex flex-col items-center gap-1.5 w-[90px] lg:w-[120px] pt-3 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 overflow-hidden">
                                                <span class="text-base font-semibold">2.5GB</span>
                                                <span class="text-xs">2 Days</span>
                                                <span class="text-xs">&#8358;2,000</span>
                                                <span class="text-xs text-green-500">&#8358;30 Cashback</span>
                                                <div class="bg-green-100 w-full text-center p-1.5">Pay &#8358;98</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="tabs-with-underline-3"
                                        class="hidden fc-tab-active:opacity-100 transition-all duration-300 transform opacity-0"
                                        role="tabpanel" aria-labelledby="tabs-with-underline-item-3">
                                        <p class="text-gray-500 dark:text-gray-400">
                                            Tailwind CSS offers a seamless way to build modern websites without having to
                                            leave your HTML. The framework functions by scanning all of your HTML files,
                                            JavaScript components, and templates for class names, automatically generating
                                            corresponding styles, and writing them to a static CSS file. This approach is
                                            fast, flexible, and reliable, requiring zero runtime. Whether you need to create
                                            form layouts, tables, or modal dialogs, Tailwind CSS provides everything
                                            necessary to design beautiful, responsive web applications. Additionally, the
                                            framework includes checkout forms, shopping carts, and product views, making it
                                            the ideal choice for developing your next e-commerce front-end.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="lg:w-4/12">
                            <h4 class="font-semibold text-lg mb-6">Transaction Details</h4>

                            @foreach ([1, 2, 3, 4] as $trx)
                                <div class="flex gap-3 items-center px-2 py-3 border-b">
                                    <div class="flex flex-col flex-grow">
                                        <div class="flex justify-between">
                                            <p>Airtime Purchase</p>
                                            <span class="font-bold"> -&#8358;2,500.00</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>

                    <div id="pay-now"
                        class="fc-offcanvas-open:translate-y-0 translate-y-full fixed bottom-0 inset-x-0 transition-all duration-300 transform max-h-[40vh] h-full w-full z-50 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hidden">
                        <div class="flex justify-between items-center py-2 px-4 border-b dark:border-gray-700">
                            <h3 class="font-medium">
                                Offcanvas title
                            </h3>
                            <button
                                class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-700  text-sm dark:text-gray-500 dark:hover:text-gray-400"
                                data-fc-dismiss type="button">
                                <span class="material-symbols-rounded">close</span>
                            </button>
                        </div>
                        <div class="p-4">
                            @foreach ([1, 2, 3, 4] as $trx)
                                <div class="flex gap-3 items-center px-2 py-3 border-b">
                                    <div class="flex flex-col flex-grow">
                                        <div class="flex justify-between">
                                            <p>Airtime Purchase</p>
                                            <span class="font-bold"> -&#8358;2,500.00</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <button class="btn bg-primary text-white">
                                Pay Now
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Transaction History -->
        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6 w-full">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">Transactions</p>
                </div>

                <div class="lg:p-6">

                    <div class="overflow-x-auto">
                        <div class="min-w-full inline-block align-middle">
                            {{-- Desktop Table --}}
                            <div class="hidden lg:block border rounded-lg overflow-hidden dark:border-gray-700">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead>
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Name
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Age
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Address</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                John Brown</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                45</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                New York No. 1 Lake Park</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                Jim Green</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                27</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                London No. 1 Lake Park</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                Joe Black</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                31</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                Sidney No. 1 Lake Park</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            {{-- Mobile Table --}}
                            <div class="lg:hidden">
                                @foreach ([1, 2, 3, 4] as $trx)
                                    <div class="flex gap-3 items-center px-2 py-3 border-b">
                                        <div class="flex justify-center items-center bg-green-200 rounded-full w-7 h-7">
                                            <i class="mgc_arrow_right_up_line text-lg"></i>
                                        </div>
                                        <div class="flex flex-col flex-grow">
                                            <div class="flex justify-between font-bold">
                                                <p>Airtime Purchase</p>
                                                <span> -&#8358;2,500.00</span>
                                            </div>
                                            <span>23 Dec, 2024</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
