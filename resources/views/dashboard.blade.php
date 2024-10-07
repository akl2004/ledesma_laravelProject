<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div> -->
                <div class="p-6 text-gray-900">
                    <h3 class="text-red-700">TEYA!</h3>
                    <p class="bg-blue-400 p-8 rounded-lg text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo perspiciatis ea, esse magni, animi repellat perferendis, harum veniam ipsa veritatis nisi rerum ut amet corrupti. Ea quod consequuntur minima in!</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
