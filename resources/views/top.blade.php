<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>{{ __('top_text') }}</p>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('check.type.index') }}">
                        {{ __('check_type') }}
                    </a>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('check.body.index') }}">
                        {{ __('check_body') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
