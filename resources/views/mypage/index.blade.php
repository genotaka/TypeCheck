<x-app-layout>
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
                        <table class="table table-hover mb-0">
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
                        <div class="container mx-auto px-6 py-16">
                            <div class="mx-auto sm:w-6/12 lg:w-5/12 xl:w-[30%]">
                                <div>
                                    <h1 class="text-3xl">あなたの体質タイプ判定</h1>
                                    <p class="mt-2 text-gray-600">サブタイトル</p>
                                </div>

                                {{-- アイコンコンテンツ --}}
                                <div class="mt-4">
                                    <div class="relative flex flex-col justify-end overflow-hidden rounded-b-xl pt-6">
                                        <div class="group relative flex cursor-pointer justify-between rounded-xl bg-amber-200 before:absolute before:inset-y-0 before:right-0 before:w-1/2 before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-amber-600 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
                                            <div class="relative  space-y-1 p-4">
                                                <h4 class="text-lg text-amber-900">血不足</h4>
                                                <div class="relative h-6 text-amber-800 text-sm">
                                                    <span class="transition duration-300 group-hover:invisible group-hover:opacity-0">詳細はこちら</span>
                                                    <a href="" class="flex items-center gap-3 invisible absolute left-0 top-0 translate-y-3 transition duration-300 group-hover:visible group-hover:translate-y-0">
                                                        <span>詳細 </span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-4 transition duration-300 group-hover:translate-x-0" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <img class="absolute bottom-0 right-6 w-[6rem] transition duration-300 group-hover:scale-[1.6]" src="/img/mark/blood_minus.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="relative -mr-6 flex flex-col justify-end overflow-hidden rounded-b-xl pt-6 pr-6">
                                        <div class="group relative flex cursor-pointer justify-between rounded-xl bg-orange-200 before:absolute before:inset-y-0 before:right-0 before:w-1/2 before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-orange-600 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
                                            <div class="relative space-y-1 p-4">
                                                <h4 class="text-lg text-orange-900">血の滞り</h4>
                                                <div class="relative h-6 text-orange-800 text-sm">
                                                    <span class="transition duration-300 group-hover:invisible group-hover:opacity-0">Selena Gomez</span>
                                                    <a href="" class="w-max flex items-center gap-3 invisible absolute left-0 top-0 translate-y-3 transition duration-300 group-hover:visible group-hover:translate-y-0">
                                                        <span>Listen now </span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-4 transition duration-300 group-hover:translate-x-0" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <img class="absolute -bottom-1 right-0 w-[6rem] transition duration-300 group-hover:scale-[1.4]" src="/img/mark/blood_plus.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="relative flex flex-col justify-end overflow-hidden rounded-b-xl pt-6">
                                        <div class="group relative flex cursor-pointer justify-between rounded-xl bg-rose-200 before:absolute before:inset-y-0 before:right-0 before:w-1/2 before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-rose-600 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
                                            <div class="relative space-y-1 p-4">
                                                <h4 class="text-lg text-rose-900">Love yourself</h4>
                                                <div class="relative h-6 text-rose-800 text-sm">
                                                    <span class="transition duration-300 group-hover:invisible group-hover:opacity-0">Justin Bieber</span>
                                                    <a href="" class="w-max flex items-center gap-3 invisible absolute left-0 top-0 translate-y-3 transition duration-300 group-hover:visible group-hover:translate-y-0">
                                                        <span>Listen now </span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-4 transition duration-300 group-hover:translate-x-0" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <img class="absolute bottom-0 right-6 w-[6rem] transition duration-300 group-hover:scale-[1.4]" src="https://raw.githubusercontent.com/Meschacirung/Tailus-website/main/public/images/singers/Justin-Bieber.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="relative -mr-6 flex flex-col justify-end overflow-hidden rounded-b-xl pt-6 pr-6">
                                        <div class="group relative flex cursor-pointer justify-between rounded-xl bg-fuchsia-200 before:absolute before:inset-y-0 before:right-0 before:w-1/2 before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-fuchsia-600 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
                                            <div class="relative w-7/12 space-y-1 p-4">
                                                <h4 class="text-lg text-fuchsia-900">7 Rings</h4>
                                                <div class="relative h-6 text-fuchsia-800 text-sm">
                                                    <span class="transition duration-300 group-hover:invisible group-hover:opacity-0">Ariana Grande</span>
                                                    <a href="" class="w-max flex items-center gap-3 invisible absolute left-0 top-0 translate-y-3 transition duration-300 group-hover:visible group-hover:translate-y-0">
                                                        <span>Listen now </span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-4 transition duration-300 group-hover:translate-x-0" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <img class="absolute -bottom-1 right-0 w-[6rem] transition duration-300 group-hover:scale-[1.4]" src="https://raw.githubusercontent.com/Meschacirung/Tailus-website/main/public/images/singers/Ariana-Grande.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="relative flex flex-col justify-end overflow-hidden rounded-b-xl pt-6">
                                        <div class="group relative flex cursor-pointer justify-between rounded-xl bg-blue-200 before:absolute before:inset-y-0 before:right-0 before:w-1/2 before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-blue-600 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
                                            <div class="relative space-y-1 p-4">
                                                <h4 class="text-xl text-blue-900">Diamond</h4>
                                                <div class="relative h-6 text-blue-800 text-sm">
                                                    <span class="transition duration-300 group-hover:invisible group-hover:opacity-0">Rihanna</span>
                                                    <a href="" class="w-max flex items-center gap-3 invisible absolute left-0 top-0 translate-y-3 transition duration-300 group-hover:visible group-hover:translate-y-0">
                                                        <span>Listen now </span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-4 transition duration-300 group-hover:translate-x-0" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <img class="absolute bottom-0 right-6 w-[6rem] transition duration-300 group-hover:scale-[1.4]" src="https://raw.githubusercontent.com/Meschacirung/Tailus-website/main/public/images/singers/Rihanna.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-home" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent active" id="tabs-home-tab" data-bs-toggle="pill" data-bs-target="#tabs-home" role="tab" aria-controls="tabs-home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-profile" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile" role="tab" aria-controls="tabs-profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-messages" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-messages-tab" data-bs-toggle="pill" data-bs-target="#tabs-messages" role="tab" aria-controls="tabs-messages" aria-selected="false">Messages</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-contact" class="nav-link disabled pointer-events-none block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-contact-tab" data-bs-toggle="pill" data-bs-target="#tabs-contact" role="tab" aria-controls="tabs-contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="tabs-tabContent">
                        <div class="tab-pane fade show active" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab">
                            Tab 1 content
                        </div>
                        <div class="tab-pane fade" id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
                            Tab 2 content
                        </div>
                        <div class="tab-pane fade" id="tabs-messages" role="tabpanel" aria-labelledby="tabs-profile-tab">
                            Tab 3 content
                        </div>
                        <div class="tab-pane fade" id="tabs-contact" role="tabpanel" aria-labelledby="tabs-contact-tab">
                            Tab 4 content
                        </div>
                    </div>


                    <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                            @foreach($check_result as $check_result_row)
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}" @if ($loop->last) class="active" aria-current="true" @endif aria-label="Slide {{ $loop->index }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner relative w-full overflow-hidden">

                            @foreach($check_result as $check_result_row)
                                <div class="carousel-item @if ($loop->last)active @endif relative float-left w-full">
                                    <div class="row justify-content-md-center">
                                        <div class="col-12 text-center my-3">
                                            <p class="lead">チェック日： <span class="red-ic bold">{{ $check_result_row->created_at }}</span></p>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-md-center">
                                            <div class="col-12 col-md-6">
                                                <div class="chart-container" style="position: relative; height:50%; width:50%">
                                                    <canvas id="myChart{{ $loop->index }}"></canvas>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-4">
                                                @foreach(explode('|', $check_result_row->type_result) as $data)

                                                    @foreach($type_data as $type_data_row)
                                                        @if ($data == $type_data_row->type_name)
                                                            <section class="bg-gray-100 lg:py-12 lg:flex lg:justify-center">
                                                                <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
                                                                    <div class="lg:w-1/2">
                                                                        <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('{{$type_data_row->image_path}}')"></div>
                                                                    </div>

                                                                    <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                                                                        <img class="img-fluid" src="{{$type_data_row->mark_path}}" alt="status">
                                                                        <h3 class="font-bold text-gray-800 md:text-3xl">
                                                                            <span class="text-blue-400">{{$type_data_row->type_caption}}</span>
                                                                            {{$type_data_row->description}}
                                                                        </h3>
                                                                        <p class="text-white mb-4">{{$type_data_row->contents}}</p>
                                                                        <div class="card mb-3">
                                                                            <div class="card-header orange">治す飲み物</div>
                                                                            <hr>
                                                                            <p class="">{{$type_data_row->drink}}</p>
                                                                        </div>
                                                                        <div class="card mb-5">
                                                                            <div class="card-header bg-danger">治す食べ物</div>
                                                                            <hr>
                                                                            <p class="">{{$type_data_row->food}}</p>
                                                                        </div>

                                                                        <div class="mt-8">
                                                                            <a class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700" href="{{ route('check.type.index') }}"><i class="fas fa-angle-right"></i> 最新の体質チェックを測る</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </div>
                                            <div class="col-2"></div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                        <button
                            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                            type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                            type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="my-5">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-4">
                                <p class="text-center">まだ症状チェックをしていないため結果はありません。ご自身の健康状態を診断してみましょう。</p>
                                <a href="{{ route('check.type.index') }}" class="btn btn-lg btn-block btn-warning">診断する</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  tailwind用プラグイン  --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    {{-- グラフ描画用JS --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script>
        @foreach($check_result as $check_result_row)

        var check_val = [{{ $check_result_row->soul_plus }},{{ $check_result_row->heat_plus }},{{ $check_result_row->blood_plus }},{{ $check_result_row->water_plus }},{{ $check_result_row->soul_minus }},{{ $check_result_row->heat_minus }},{{ $check_result_row->blood_minus }},{{ $check_result_row->water_minus }}];

        var ctx{{ $loop->index }} = document.getElementById("myChart{{ $loop->index }}");
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
