<x-guest-layout>
    @section('title', 'top')

    <!-- component -->
    <div class="py-3 md:py-10">
        <div class="flex items-center justify-center py-1 md:py-6">
            <img src="{{ asset('img/common/brand01.svg') }}" class="w-8/12 md:w-3/12" alt="">
        </div>
        <div class="flex items-center justify-center py-5 md:py-10">
            <img src="{{ asset('img/check/main_cn.png') }}" class="w-8/12 md:w-3/12" alt="">
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6">
                    @if( !Auth::check() )
                    <div class="flex items-center justify-center my-4">
                        <x-label>{{ __('診断にはログインもしくはアカウント登録が必要です。') }}
                            <br class="md:none">
                            <a class="ml-3 text-blue-800 font-semibold" href="{{ route('login') }}">ログインはこちら</a>
                        </x-label>
                    </div>
                    @endif
                        <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                            <x-button>
                                <a href="{{ route('check.type.start') }}">
                                    {{ __('check_type') }}
                                </a>
                            </x-button>
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
