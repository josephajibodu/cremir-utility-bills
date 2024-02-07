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
