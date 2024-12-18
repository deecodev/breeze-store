<x-admin-layout>
    <div class="py-8 px-6 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Save Products -->
            <div class="relative bg-white rounded-lg shadow-md p-6 flex items-center space-x-4">
                <a href="{{ route('admin.users') }}" class="absolute inset-0 size-full"></a>
                <div class="bg-blue-100 rounded-full p-4">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>

                </div>
                <div>
                    <p class="text-2xl font-semibold">{{ $users }}</p>
                    <p class="text-gray-500">Total Users</p>
                </div>
            </div>
            <!-- Stock Products -->
            <div class="relative bg-white rounded-lg shadow-md p-6 flex items-center space-x-4">
                <a href="{{ route('admin.stores') }}" class="absolute inset-0 size-full"></a>
                <div class="bg-yellow-100 rounded-full p-4">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>

                </div>
                <div>
                    <p class="text-2xl font-semibold">{{ $stores }}</p>
                    <p class="text-gray-500">Total Stores</p>
                </div>
            </div>
            <!-- Sales Products -->
            <div class="relative bg-white rounded-lg shadow-md p-6 flex items-center space-x-4">
                <a href="{{ route('admin.products') }}" class="absolute inset-0 size-full"></a>
                <div class="bg-red-100 rounded-full p-4">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>

                </div>
                <div>
                    <p class="text-2xl font-semibold">{{ $products }}</p>
                    <p class="text-gray-500">Total Products</p>
                </div>
            </div>
        </div>

</x-admin-layout>
