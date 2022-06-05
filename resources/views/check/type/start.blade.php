<x-app-layout>
    @section('title', '体質チェックスタート')

    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center">
                        <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">type check</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ __('check_type') }}</p>
                        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">あてはまる症状に「はい」か「いいえ」で回答してください。</p>
                    </div>

                    <div class="mt-10">
                        <form method="POST" action="{{ route('check.type.submit') }}">
                            @csrf
                            <div class="form-group">
                                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                                    @foreach ($question as $question_row)
                                        <div class="radio_content">
                                            <p class="alert alert-warning">Q{{ $question_row->id }}. {{ $question_row->question }}</p>
                                            <!-- radio component -->
                                            <div class="grid w-full grid-cols-2 space-x-2 rounded-xl bg-gray-200 p-2">
                                                <div>
                                                    <input type="radio" id="q{{ $question_row->id }}_yes" name="{{ $question_row->id }}" value="yes" class="peer hidden"  />
                                                    <label for="q{{ $question_row->id }}_yes" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">{{__("yes")}}</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="q{{ $question_row->id }}_no" name="{{ $question_row->id }}" value="no"  class="peer hidden" checked />
                                                    <label for="q{{ $question_row->id }}_no" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">{{__("no")}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-10 flex items-center justify-center">
                                    <x-button>
                                        {{ __('診断する') }}
                                    </x-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
