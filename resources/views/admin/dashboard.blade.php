<x-admin-layout>
    <div class="py-8 px-6 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-8">
            <div class="relative h-40 rounded bg-gray-50 shadow-sm border border-slate-100/50">
                <div
                    class="absolute -top-6 left-2 w-auto px-4 py-2 bg-blue-400 rounded-md shadow-md flex flex-col text-gray-700 justify-center items-center">
                    <x-svg.user-svg></x-svg.user-svg>
                    <p>users</p>
                </div>
                <div class="px-4 pt-2 w-full text-end text-gray-700">
                    <p class="text-2xl font-bold">Total</p>
                    <p class="text-xl font-medium">45</p>
                </div>
            </div>
            <div class="relative h-40 rounded bg-gray-50 shadow-sm border border-slate-100/50">
                <div
                    class="absolute -top-6 left-2 w-auto px-4 py-2 bg-green-400 rounded-md shadow-md flex flex-col text-gray-700 justify-center items-center">
                    <x-svg.store-svg></x-svg.store-svg>
                    <p>stores</p>
                </div>
                <div class="px-4 pt-2 w-full text-end text-gray-700">
                    <p class="text-2xl font-bold">Total</p>
                    <p class="text-xl font-medium">45</p>
                </div>
            </div>
            <div class="relative h-40 rounded bg-gray-50 shadow-sm border border-slate-100/50">
                <div
                    class="absolute -top-6 left-2 w-auto px-4 py-2 bg-yellow-400 rounded-md shadow-md flex flex-col text-gray-700 justify-center items-center">
                    <x-svg.product-svg></x-svg.product-svg>
                    <p>paroducts</p>
                </div>
                <div class="px-4 pt-2 w-full text-end text-gray-700">
                    <p class="text-2xl font-bold">Total</p>
                    <p class="text-xl font-medium">45</p>
                </div>
            </div>
        </div>

</x-admin-layout>
