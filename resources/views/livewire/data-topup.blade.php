<div>
    @php
        $selectedPackage = isset($package) && $package ? \App\Services\AirtimeNigeria\DataObject\DataPlan::fromArray($package) : null;
    @endphp

    <form>
        <div class="flex flex-col lg:flex-row flex-wrap">
            <div class="lg:w-8/12">
                <div class="flex gap-4 lg:gap-8 mb-6">
                    <label
                        class="border-2 {{ $network == \App\Enums\Network::MTN ? 'border-black' : ''}} rounded-xl w-full h-12 lg:w-24 lg:h-24 flex items-center justify-center group">
                        <input type="radio" value="{{ \App\Enums\Network::MTN }}" wire:model.live="network"
                               class="hidden">
                        <img alt="mtn"
                             class="w-[100%] group-hover:saturate-50 {{ $network == \App\Enums\Network::MTN ? 'saturate-100' : 'saturate-0'}}"
                             src="{{ asset('images/providers/mtn.svg') }}"/>
                    </label>

                    <label
                        class="border-2 {{ $network == \App\Enums\Network::AIRTEL ? 'border-black' : ''}} rounded-xl w-full h-12 lg:w-24 lg:h-24 flex items-center justify-center group">
                        <input type="radio" value="{{ \App\Enums\Network::AIRTEL }}" wire:model.live="network"
                               class="hidden">
                        <img alt="airtel"
                             class="w-[70%] group-hover:saturate-50 {{ $network == \App\Enums\Network::AIRTEL ? 'saturate-100' : 'saturate-0'}}"
                             src="{{ asset('images/providers/airtel.svg') }}"/>
                    </label>

                    <label
                        class="border-2 {{ $network == \App\Enums\Network::_9MOBILE ? 'border-black' : ''}} rounded-xl w-full h-12 lg:w-24 lg:h-24 flex items-center justify-center group">
                        <input type="radio" value="{{ \App\Enums\Network::_9MOBILE }}" wire:model.live="network"
                               class="hidden">
                        <img alt="9mobile"
                             class="w-[70%] {{ $network == \App\Enums\Network::_9MOBILE ? 'saturate-100' : 'saturate-0'}}"
                             src="{{ asset('images/providers/9mobile.svg') }}"/>
                    </label>

                    <label
                        class="border-2 {{ $network == \App\Enums\Network::GLO ? 'border-black' : ''}} rounded-xl w-full h-12 lg:w-24 lg:h-24 flex items-center justify-center group">
                        <input type="radio" value="{{ \App\Enums\Network::GLO }}" wire:model.live="network"
                               class="hidden">
                        <img alt="glo"
                             class="w-[70%] {{ $network == \App\Enums\Network::GLO ? 'saturate-100' : 'saturate-0'}}"
                             src="{{ asset('images/providers/glo.svg') }}"/>
                    </label>
                </div>

                <div class="mb-12">
                    <label for="phonenumber"
                           class="text-gray-800 text-sm font-medium inline-block mb-2">Select a
                        Recipient</label>

                    <div class="flex w-fit">
                        <div
                            class="inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                            @
                        </div>
                        <input wire:model.live="phone" id="phonenumber" type="text" placeholder="Recipient"
                               autocomplete="tel"
                               class="form-input ltr:rounded-l-none rtl:rounded-r-none"/>
                    </div>

                    <div class="flex flex-col lg:flex-row mt-3 gap-4">
                        <div wire:click="selectContact('08167297386')"
                             class="inline-flex items-center gap-3 py-1 px-2 rounded-lg text-xs font-medium bg-blue-100 text-gray-800 w-fit">
                            <small class="text-[10px]">MTN</small>
                            <small class="text-sm">0816 729 7386</small>
                        </div>

                        <div wire:click="selectContact('08137297386')"
                             class="inline-flex items-center gap-3 py-1 px-2 rounded-lg text-xs font-medium bg-blue-100 text-gray-800 w-fit">
                            <small class="text-[10px]">GLO</small>
                            <small class="text-sm">0816 729 7386</small>
                        </div>

                        <div wire:click="selectContact('08167297386')"
                             class="inline-flex items-center gap-3 py-1 px-2 rounded-lg text-xs font-medium bg-blue-100 text-gray-800 w-fit">
                            <small class="text-[10px]">Airtel</small>
                            <small class="text-sm">0816 729 7386</small>
                        </div>

                        <div wire:click="selectContact('08157297386')"
                             class="inline-flex items-center gap-3 py-1 px-2 rounded-lg text-xs font-medium bg-blue-100 text-gray-800 w-fit">
                            <small class="text-[10px]">MTN</small>
                            <small class="text-sm">0816 729 7386</small>
                        </div>
                    </div>
                </div>

                <div>
                    <nav class="flex space-x-3 border-b max-w-[100%]" aria-label="Filters">
                        @foreach($activePlanGroup as $title => $plans)
                            <button wire:click="filterBy('{{ $title }}')" type="button"
                                    class="capitalize {{ $dataFilter === $title ? 'border-primary font-semibold text-primary' : 'border-transparent' }} py-4 px-1 inline-flex items-center gap-2 border-b-2 -mb-px transition-all text-sm whitespace-nowrap text-gray-500 hover:text-primary">
                                {{ $title }}
                            </button>
                        @endforeach
                    </nav>

                    <div class="mt-3 overflow-hidden">
                        <div class="flex flex-wrap gap-3 mb-6">
                            @foreach($activePlanGroup[$dataFilter] as $plan)
                                @php
                                    $planObj = \App\Services\AirtimeNigeria\DataObject\DataPlan::fromArray($plan);
                                @endphp

                                <div wire:click="selectPackage('{{ $planObj->packageCode }}')"
                                    class="inline-flex flex-col items-center gap-1.5 w-[90px] lg:w-[120px] pt-3 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 overflow-hidden">
                                    <span class="text-base font-semibold">{{ $planObj->bundle }}</span>
                                    <span class="text-xs">{{ $planObj->validity }}</span>
                                    <span
                                        class="text-xs">&#8358;{{ Number::format($planObj->agentPrice, locale: 'en') }}</span>

                                    @if($priceDiff = $planObj->regularPrice - $planObj->agentPrice > 0)
                                        <small class="text-[11px] text-green-500">Save
                                            &#8358;{{ Number::format($planObj->regularPrice - $planObj->agentPrice, locale: 'en')  }}</small>
                                    @else
                                        <small class="text-[11px] text-green-500 opacity-0">Save 0</small>
                                    @endif
                                    <div
                                        class="bg-green-100 w-full text-center text-[10px] p-1.5 place-self-end">{{ $planObj->dataType }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

            <div class="lg:w-4/12">
                <h4 class="font-semibold text-lg mb-6">Transaction Details</h4>

                <div class="flex gap-3 items-center px-2 py-3 border-b">
                    <div class="flex flex-col flex-grow">
                        <div class="flex justify-between">
                            <p>Operator</p>
                            <span class="font-bold uppercase">{{ $network }}</span>
                        </div>
                    </div>
                </div>

                <div class="flex gap-3 items-center px-2 py-3 border-b">
                    <div class="flex flex-col flex-grow">
                        <div class="flex justify-between">
                            <p>Recipient</p>
                            <span class="font-bold">{{ $phone }}</span>
                        </div>
                    </div>
                </div>

                <div class="flex gap-3 items-center px-2 py-3 border-b">
                    <div class="flex flex-col flex-grow">
                        <div class="flex justify-between">
                            <p>Package</p>
                            <span class="font-bold">{{ $selectedPackage->planSummary ?? '-' }}</span>
                        </div>
                    </div>
                </div>

                <div class="flex gap-3 items-center px-2 py-3 border-b">
                    <div class="flex flex-col flex-grow">
                        <div class="flex justify-between">
                            <p>Package Amount</p>
                            <span class="font-bold"> -&#8358;2,500.00</span>
                        </div>
                    </div>
                </div>

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
