<x-app-layout>
    @section('title', '体質チェックスタート')
    @section('description', '体調管理のためにまずご自身の体質をチェックして理解することが肝心です。')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 grey-ic text-center">
                                <h4 class="h4 h4-responsive">あてはまる症状に「はい」か「いいえ」で回答してください。</h4>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('check.body.submit') }}">
                            @csrf
                            <div class="form-group row grey-ic">
                                @foreach ($question as $question_row)
                                    <div class="col-6 my-3">
                                        <div class="radio_content">
                                            <p class="alert alert-warning">Q{{ $question_row->id }}. {{ $question_row->question }}</p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="q{{ $question_row->id }}_yes" name="{{ $question_row->id }}" value="yes">
                                                <label class="custom-control-label" for="q{{ $question_row->id }}_yes">はい</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="q{{ $question_row->id }}_no" name="{{ $question_row->id }}" value="no" checked>
                                                <label class="custom-control-label" for="q{{ $question_row->id }}_no">いいえ</label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-12 my-5">
                                    <button type="submit" class="btn btn-lg btn-block btn-pink">
                                        {{ __('診断する') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
