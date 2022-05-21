<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-fluid warning-color orange-ic py-2">
                        <div class="row justify-content-center">
                            <div class="col-10 col-md-3">
                                <img src="/img/common/logo.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-10 d-none d-md-block justify-content-center text-center">
                                <img src="/img/check/check_top1.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-12 d-block d-md-none justify-content-center text-center">
                                <img src="/img/check/check_top_sp.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-8">
                                <a href="{{ route('check.type.start') }}" class="btn btn-block btn-lg btn-pink">診断スタート！</a>
                            </div>
                        </div>

                        <div class="row justify-content-center text-center brown-ic py-5">
                            <div class="col">
                                <h3>【全22問】</h3>
                                <p>本来の東洋医療における問診項目：約360設問から内容を厳選し、精度を上げて簡易体質チェックにしたWHOアドバイザリー医師が監修したオリジナルプログラムです。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
