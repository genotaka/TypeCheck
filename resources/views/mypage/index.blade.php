<x-app-layout>
    @section('title', 'マイページ')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('mypage') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--  プロフィール情報  --}}
                    <div class="pink lighten-4 py-5">
                        <div class="view view-cascade btn-mdb-color d-flex align-items-center text-center">
                            <h1 class="text-3xl">ユーザー情報</h1>
                        </div>
                        <!--Table-->
                        <table class="table table-hover mb-0 items-center justify-center">
                            <!--Table body-->
                            <tbody>
                            <tr>
                                <td>登録メールアドレス</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <td>お名前</td>
                                <td>{{ Auth::user()->name }} さん</td>
                            </tr>
                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>

                    {{--  結果領域  --}}
                    <!-- component -->
                    <div class="bg-white">
                        <div class="mx-auto px-6 py-16">
                            <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#tabs-home" class="nav-link block font-medium text-2xl leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent active" id="tabs-home-tab" data-bs-toggle="pill" data-bs-target="#tabs-home" role="tab" aria-controls="tabs-home" aria-selected="true">{{__('check_type')}}</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tabs-profile" class="nav-link block font-medium text-2xl leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile" role="tab" aria-controls="tabs-profile" aria-selected="false">{{__('check_body')}}</a>
                                </li>
                            </ul>
                            <hr>
                            <div class="tab-content py-10" id="tabs-tabContent">
                                <div class="tab-pane fade show active" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab">
                                    <div class="flex items-center justify-center">
                                        <h1 class="text-3xl">あなたの体質タイプ判定</h1>
                                    </div>

                                    <div id="carouselTypeCaptions" class="carousel slide relative" data-bs-ride="carousel">
                                        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                                            @foreach($type_result as $check_result_row)
                                                <button type="button" data-bs-target="#carouselTypeCaptions" data-bs-slide-to="{{ $loop->index }}" @if ($loop->last) class="active" aria-current="true" @endif aria-label="Slide {{ $loop->index }}"></button>
                                            @endforeach
                                        </div>
                                        <div class="carousel-inner relative w-full overflow-hidden">
                                            @foreach($type_result as $check_result_row)
                                                <div class="carousel-item @if ($loop->last)active @endif relative float-left w-full items-center justify-center">
                                                    <div class="row justify-content-md-center">
                                                        <div class="col-12 text-center my-3">
                                                            <p class="text-2xl">チェック日： <span class="text-red-800 bold">{{ $check_result_row->created_at }}</span></p>
                                                        </div>
                                                        <hr>
                                                        <div class="justify-center">
                                                            <div class="col-12 col-md-6">
                                                                <div class="chart-container" style="position: relative; height:50%; width:50%">
                                                                    <canvas id="typeChart{{ $loop->index }}"></canvas>
                                                                </div>
                                                            </div>

                                                            <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tabFill" role="tablist">
                                                                @foreach(explode('|', $check_result_row->type_result) as $data)
                                                                <li class="nav-item flex-auto text-center" role="presentation">
                                                                    <a href="#tabs-{{ $loop->parent->index }}-{{ $loop->index }}" class="nav-link w-full block font-medium text-xl leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent @if ($loop->last)active @endif"
                                                                       data-bs-toggle="pill" aria-selected="@if ($loop->last)true @else false @endif">タイプ {{ $loop->index }}</a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                            <div class="tab-content" id="tabs-tabContentFill">
                                                                @foreach(explode('|', $check_result_row->type_result) as $data)
                                                                    @foreach($type_data as $type_data_row)
                                                                        @if ($data == $type_data_row->type_name)
                                                                            <div class="tab-pane fade @if ($loop->parent->last)show active @endif" id="tabs-{{ $loop->parent->parent->index }}-{{ $loop->parent->index }}">
                                                                                <section class="bg-gray-100 lg:py-12 lg:flex lg:justify-center">
                                                                                    <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
                                                                                        <div class="lg:w-1/3">
                                                                                            <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('{{$type_data_row->image_path}}')"></div>
                                                                                        </div>

                                                                                        <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-2/3">
                                                                                            <img class="img-fluid" src="{{$type_data_row->mark_path}}" alt="status">
                                                                                            <h3 class="font-bold text-gray-800 md:text-3xl">
                                                                                                <span class="text-blue-400">{{$type_data_row->type_caption}}</span>
                                                                                                {{$type_data_row->description}}
                                                                                            </h3>
                                                                                            <p class="text-amber-900 mb-4">{{$type_data_row->contents}}</p>

                                                                                            <!-- 改善する食材 -->
                                                                                            <div class="mt-4 lg:mt-0 lg:row-span-2">
                                                                                                <div>
                                                                                                    <h3 class="text-2xl text-gray-900 font-medium">直す食べ物</h3>
                                                                                                    <hr>
                                                                                                    <p class="">{{$type_data_row->food}}</p>
                                                                                                </div>
                                                                                                <div class="mt-10">
                                                                                                    <h3 class="text-2xl text-gray-900 font-medium">直す飲み物</h3>
                                                                                                    <hr>
                                                                                                    <p class="">{{$type_data_row->drink}}</p>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach
                                        </div>
                                        <button
                                            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                                            type="button" data-bs-target="#carouselTypeCaptions" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button
                                            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                                            type="button" data-bs-target="#carouselTypeCaptions" data-bs-slide="next">
                                            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
                                    <div class="flex items-center justify-center">
                                        <h1 class="text-3xl">あなたの体型タイプ判定</h1>
                                    </div>

                                    <div id="carouselBodyCaptions" class="carousel slide relative" data-bs-ride="carousel">
                                        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                                            @foreach($body_result as $check_result_row)
                                                <button type="button" data-bs-target="#carouselBodyCaptions" data-bs-slide-to="{{ $loop->index }}" @if ($loop->last) class="active" aria-current="true" @endif aria-label="Slide {{ $loop->index }}"></button>
                                            @endforeach
                                        </div>
                                        <div class="carousel-inner relative w-full overflow-hidden">
                                            @foreach($body_result as $check_result_row)
                                                <div class="carousel-item @if ($loop->last)active @endif relative float-left w-full items-center justify-center">
                                                    <div class="row justify-content-md-center">
                                                        <div class="col-12 text-center my-3">
                                                            <p class="lead">チェック日： <span class="red-ic bold">{{ $check_result_row->created_at }}</span></p>
                                                        </div>
                                                        <hr>
                                                        <div class="justify-center">
                                                            <div class="col-12 col-md-4">
                                                                @foreach(explode('|', $check_result_row->body_result) as $data)
                                                                    @foreach($body_data as $body_data_row)
                                                                        @if ($data == $body_data_row->body_name)
                                                                            <section class="bg-gray-100 lg:py-12 lg:flex lg:justify-center">
                                                                                <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
                                                                                    <div class="lg:w-1/2">
                                                                                        <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('{{$body_data_row->image_path}}')"></div>
                                                                                    </div>

                                                                                    <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                                                                                        <h3 class="font-bold text-gray-800 md:text-3xl">
                                                                                            {{$body_data_row->description}}
                                                                                        </h3>
                                                                                        <p class="text-amber-900 mb-4">{{$type_data_row->contents}}</p>
                                                                                        <div class="mt-8">
                                                                                            <a class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700" href="{{ route('check.body.start') }}"><i class="fas fa-angle-right"></i> 最新の体質チェックを測る</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach
                                        </div>
                                        <button
                                            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                                            type="button" data-bs-target="#carouselBodyCaptions" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button
                                            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                                            type="button" data-bs-target="#carouselBodyCaptions" data-bs-slide="next">
                                            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if( count($type_result) == 0)
                    <div class="my-5">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-4">
                                <p class="text-center">まだ症状チェックをしていないため結果はありません。ご自身の健康状態を診断してみましょう。</p>
                                <a href="{{ route('check.type.start') }}" class="btn btn-lg btn-block btn-warning">診断する</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{--  tailwind用プラグイン  --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    {{-- グラフ描画用JS --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script>
        @foreach($type_result as $check_result_row)

        var check_val = [{{ $check_result_row->soul_plus }},{{ $check_result_row->heat_plus }},{{ $check_result_row->blood_plus }},{{ $check_result_row->water_plus }},{{ $check_result_row->soul_minus }},{{ $check_result_row->heat_minus }},{{ $check_result_row->blood_minus }},{{ $check_result_row->water_minus }}];

        var ctx{{ $loop->index }} = document.getElementById("typeChart{{ $loop->index }}");
        var myChart{{ $loop->index }} = new Chart(ctx{{ $loop->index }}, {
            type: 'radar',
            data: {
                labels: ['気の滞り', '熱過剰', '血の滞り', '水分過剰', '気不足', '熱不足', '血不足', '水分不足'],
                datasets: [{
                    label: '結果',
                    data: check_val,
                    borderJoinStyle:'bevel',
                    backgroundColor: [
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 2,
                    // borderDash: [1],
                    fill: false,
                    pointBackgroundColor: 'rgba(255, 159, 64, 1)',
                    labelOffset: 3
                }]
            },
            options: {
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                hover: {
                    animationDuration: 1000
                },
                responsive: true,
                legend: {
                    display: false
                },
                scale: {
                    pointLabels: {
                        fontSize: 12
                    },
                    ticks: {
                        stepSize: 2,
                        // max: 10,
                        beginAtZero: true
                    }
                }
            }
        });
        @endforeach
    </script>


</x-app-layout>
