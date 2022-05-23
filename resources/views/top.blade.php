<x-guest-layout>
    <!-- component -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('img/check/main1.png') }}" class="" alt="">
                    </div>

                    <p>{{ __('top_text') }}</p>
                    @if( !Auth::check() )
                    <div class="flex items-center justify-center my-4">
                        <x-label>{{ __('診断にはログインもしくはアカウント登録が必要です。') }}
                            <a class="ml-3 text-blue-800 font-semibold" href="{{ route('login') }}">ログインはこちら</a>
                        </x-label>
                    </div>
                    @endif
                    <div class="flex items-center justify-center mt-4">
                        <div class="mx-3">
                            <x-button>
                                <a href="{{ route('check.type.index') }}">
                                    {{ __('check_type') }}
                                </a>
                            </x-button>
                        </div>
                        <div class="mx-3">
                            <x-button>
                                <a href="{{ route('check.body.index') }}">
                                    {{ __('check_body') }}
                                </a>
                            </x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
