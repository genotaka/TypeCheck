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
                        <div class="container my-3">
                            <section class="mt-3" id="profile">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <!-- Table with panel -->
                                        <div class="card pb-3">
                                            <!--Card image-->
                                            <div class="view view-cascade btn-mdb-color d-flex align-items-center text-center">
                                                <h4 class="white-text mt-1 pl-2 h4 h4-responsive">プロフィール情報</h4>
                                            </div>
                                            <!--/Card image-->
                                            <div class="row m-2">
                                                <div class="col-12 col-md-4">
                                                    <img src="img/mypage/guest.jpg" alt="avatar" class="img-thumbnail" />
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <div class="px-4 d-none d-md-block">
                                                        <div class="table-wrapper">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Table with panel -->
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    {{--  結果領域  --}}
                    <div class="container-fluid my-5">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3 class="h3 h3-responsive">あなたの体質タイプ判定</h3>
                            </div>
                        </div>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators orange-ic">
                                    @foreach($check_result as $check_result_row)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" @if ($loop->last) class="active" @endif></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">
                                    @foreach($check_result as $check_result_row)
                                        <div class="carousel-item @if ($loop->last)active @endif">
                                            <div class="row justify-content-md-center">
                                                <div class="col-12 text-center my-3">
                                                    <p class="lead">チェック日： <span class="red-ic bold">{{ $check_result_row->created_at }}</span></p>
                                                </div>
                                                <hr>
                                                <div class="row justify-content-md-center">
                                                    <div class="col-12 col-md-6">
                                                        <div class="chart-container" style="position: relative; height:100%; width:100%">
                                                            <canvas id="myChart{{ $loop->index }}"></canvas>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-4">
                                                        @foreach(explode('|', $check_result_row->type_result) as $data)

                                                            @foreach($type_data as $type_data_row)
                                                                @if ($data == $type_data_row->type_name)
                                                                    <div class="row justify-content-center d-flex d-md-none">
                                                                        <hr class="hr-dark col-12">
                                                                        <div class="col-3">
                                                                            <img class="img-fluid" src="{{$type_data_row->mark_path}}" alt="status">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <p class="display-3">{{$type_data_row->type_caption}}</p>
                                                                        </div>
                                                                        <hr class="hr-dark col-12">
                                                                    </div>

                                                                    <div class="row justify-content-center">
                                                                        <div class="col-12 col-md-6">
                                                                            <img class="img-fluid" src="{{$type_data_row->image_path}}" alt="">
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="card">
                                                                                        <div class="view overlay d-none d-md-block">
                                                                                            <div class="row justify-content-center">
                                                                                                <div class="col-6">
                                                                                                    <img class="card-img-top img-fluid" src="{{$type_data_row->mark_path}}" alt="status">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="card-body rounded-bottom">
                                                                                            <h4 class="card-title d-none d-md-block">{{$type_data_row->type_caption}}</h4>
                                                                                            <hr class="hr-dark">
                                                                                            <p class="card-text mb-4">{{$type_data_row->description}}</p>
                                                                                            <p class="card-text mb-4">{{$type_data_row->contents}}</p>
                                                                                            <a class="btn btn-primary" href="{{ route('check.type.index') }}"><i class="fas fa-angle-right"></i> 最新の体質チェックを測る</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row justify-content-center mt-3">
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="card mb-3">
                                                                                <div class="card-header text-white orange">治す飲み物</div>
                                                                                <div class="card-body">
                                                                                    <p class="card-text">{{$type_data_row->drink}}</p>
                                                                                </div>
                                                                                <a class="btn btn-warning d-none" href=""><i class="fas fa-angle-right"></i> もっと見る</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="card mb-5">
                                                                                <div class="card-header text-white bg-danger">治す食べ物</div>
                                                                                <div class="card-body">
                                                                                    <p class="card-text">{{$type_data_row->food}}</p>
                                                                                </div>
                                                                                <a class="btn btn-danger d-none" href=""><i class="fas fa-angle-right"></i> もっと見る</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                                <a class="carousel-control-prev non-scroll" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-4x fa-angle-left orange-ic"></i></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next non-scroll" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-4x fa-angle-right orange-ic"></i></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
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
</x-app-layout>
