<x-guest-layout>
    @section('title', 'top')

    <!-- component -->
    <div class="py-3 md:py-10">
        <div class="flex items-center justify-center py-1 md:py-6">
            <img src="{{ asset('img/common/brand01.svg') }}" class="w-8/12 md:w-3/12" alt="">
        </div>
        <div class="flex flex-col items-center justify-center py-3 md:py-10">
            <div class="border-4 md:border-8 border-gradient m-10">
                <h1 class="p-8 md:p-20 md:text-3xl text-pink-600 md:font-bold text-center">{{ __('top_text') }}
                    <br class="md:hidden">{{ __('top_text_2') }}
                </h1>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold md:mt-10">{{ __('top_title') }} <span class="text-pink-600 italic">{{ __('top_title_2') }}</span></h2>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="">
                    @if( !Auth::check() )
                    <div class="flex items-center justify-center my-2 pb-4 md:pb-6">
                        <x-label>
                            {{ __('login_info') }}
                            <a class="ml-3 text-blue-800 font-semibold text-pink-600 underline" href="{{ route('login') }}">{{ __('login_link') }}</a>
                        </x-label>
                    </div>
                    @endif
                        <div class="space-y-4 md:space-y-0 flex flex-col md:flex-row gap-x-10 md:gap-y-10 justify-center items-center text-center">
                            <x-button>
                                <a href="{{ route('check.type.index') }}">
                                    {{ __('check_type') }}
                                </a>
                            </x-button>
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
