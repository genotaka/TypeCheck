<x-guest-layout>
    @section('title', 'top')

    <!-- component -->
    <div class="py-12">
        <div class="flex items-center justify-center py-10">
            <img src="{{ asset('img/common/brand01.svg') }}" class="w-3/12" alt="">
        </div>
        <div class="flex items-center justify-center py-10">
            <img src="{{ asset('img/check/main_cn.png') }}" class="w-3/12" alt="">
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6">
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
                                <a href="{{ route('check.type.start') }}">
                                    {{ __('check_type') }}
                                </a>
                            </x-button>
                        </div>
                        <div class="mx-3">
                            <x-button>
                                <a href="{{ route('check.body.start') }}">
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
