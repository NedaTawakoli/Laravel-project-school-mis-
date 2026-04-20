<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div>
            <div class="w-full grid grid-cols-5">
             <livewire:dashboard.sidebar/>
                <div class="w-full h-full grid grid-col-2 gap-2 col-span-4  ">
                    <div class="p-4 bg-white/40 h-fit">
                    <h1>Employees statatistics</h1>
                    </div>
                    <div class="p-4 bg-white/70 h-fit">
                    <h1>Salary statatistics</h1>
                </div>
              <div class="p-4 bg-white/70 h-fit">
                    <h1>Contract statatistics</h1>
                </div>
                <div class="p-4 bg-white/70 h-fit">
                    <h1>Payroll statatistics</h1>
                </div>
            </div>
        </div>
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div> --}}
    </div>
</x-app-layout>
