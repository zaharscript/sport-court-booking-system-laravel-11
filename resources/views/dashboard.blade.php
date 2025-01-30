<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("🏸 You're logged in!") }}
                </div>

                <div class="p-6 bg-white dark:bg-gray-800">
                    @if (auth()->user()->role === 'admin')
                        <p class="text-red-500">Welcome, Admin! <a href="{{ route('admin.dashboard') }}">Feel free to
                                manage the system</a></p>

                        <div class="grid grid-cols-3 gap-4 mt-4 green-500">
                            <div class="p-4 bg-blue-500 text-white">Total Bookings: 120</div>
                            <div class="p-4 bg-green-500 text-white">Available Courts: 5</div>
                            <div class="p-4 bg-yellow-500 text-white">Total Revenue: $2,500</div>
                        </div>
                    @else
                        <p>Welcome to <strong>BSP Sport Arena</strong>, {{ auth()->user()->name }}! .</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
