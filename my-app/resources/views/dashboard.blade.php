<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <br><br>
        <div class="flex items-center">
            <div class="mr-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-semibold text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">
                            <div style="margin-left: 150px;">Customer</div>
                            <div class="ml-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6.293 7.293a1 1 0 011.414 0L10 9.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414zM10 3a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M4.293 12.293a1 1 0 011.414 0L10 15.586l4.293-4.293a1 1 0 111.414 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414zM10 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <a href="{{ route('customers.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">{{ __('Register Customer') }}</a>
                        <a href="{{ route('customers.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">{{ __('View Customers') }}</a>
                    </x-slot>
                </x-dropdown>
            </div>
            
            <div class="mr-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-semibold text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">
                            <div style="margin-left: 150px;">Add Products</div>
                            <div class="ml-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.293 7.293a1 1 0 011.414 0L10 9.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414zM10 3a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M4.293 12.293a1 1 0 011.414 0L10 15.586l4.293-4.293a1 1 0 111.414 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414zM10 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                    <a href="{{ route('customers.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">{{ __('Register product') }}</a>
                        <a href="{{ route('customers.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">{{ __('View products') }}</a>
                        <a href="{{ route('customers.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">{{ __('Update productr') }}</a>
                        <a href="{{ route('customers.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">{{ __('Delete product') }}</a>                    </x-slot>
                </x-dropdown>
            </div>
            
            <div class="mr-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-semibold text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">
                            <div style="margin-left: 150px;">Contact Logs</div>
                            <div class="ml-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.293 7.293a1 1 0 011.414 0L10 9.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414zM10 3a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M4.293 12.293a1 1 0 011.414 0L10 15.586l4.293-4.293a1 1 0 111.414 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414zM10 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                    <a href="{{ route('customers.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">{{ __('Register contact log') }}</a>
                        <a href="{{ route('customers.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">{{ __('View contact logs') }}</a>
                        <a href="{{ route('customers.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">{{ __('Update contact log') }}</a>
                        <a href="{{ route('customers.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">{{ __('Delete cContact log') }}</a>                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
