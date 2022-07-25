<x-app-layout>
    @section('title', 'Type Check')

    <x-slot name="header">
    </x-slot>

    <div class="pb-6 md:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center pb-4 md:pb-12">
                <h2 class="text-base md:text-pink-600 font-semibold tracking-wide uppercase">type check</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white md:text-gray-900 sm:text-4xl">{{ __('type_info_title') }}</p>
                <p class="mt-4 max-w-2xl md:text-xl text-gray-500 lg:mx-auto">{{ __('type_info_description') }}</p>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg md:mt-6">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-4 md:grid-cols-8">
                        @foreach($type_data as $type_data_row)
                            <div class="grid items-center text-center justify-center">
                                <img class="w-16 md:w-24" src="{{$type_data_row->mark_path}}" alt="status">
                                <h3 class="font-bold text-gray-800 text-sm md:text-3xl text-blue-400 mt-2 md:mt-0">{{$type_data_row->type_caption}}</h3>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-10">
                        <div class="relative mb-4 mt-10 md:mt-0">
                            <div class="group w-full py-0 pr-2 pl-9">
                                <p>
                                    汉方理论认为人体的气血水等要素在不断变化，
                                    各要素趋于平衡时即达到身体的最佳健康状态。
                                </p>
                                <div class="bg-pink-400 group-hover:bg-pink-600 h-full w-4 absolute top-0 left-0"> </div>
                            </div>
                        </div>
                        <div class="relative mb-4 mt-10 md:mt-0">
                            <div class="group w-full py-0 pr-2 pl-9">
                                <p>
                                    在现实生活中，外界环境，不良的生活习惯，
                                    各种精神压力都会影响体内平衡，使身体陷入不健康状态，久而久之导致产生各种疾病。
                                </p>
                                <div class="bg-pink-400 group-hover:bg-pink-600 h-full w-4 absolute top-0 left-0"> </div>
                            </div>
                        </div>
                        <div class="relative mb-4 mt-10 md:mt-0">
                            <div class="group w-full py-0 pr-2 pl-9">
                                <p>
                                    体质代表一个阶段的身体状态，可以通过内在和外在调节得到改变。
                                </p>
                                <div class="bg-pink-400 group-hover:bg-pink-600 h-full w-4 absolute top-0 left-0"> </div>
                            </div>
                        </div>
                        <div class="relative mb-4 mt-10 md:mt-0">
                            <div class="group w-full py-0 pr-2 pl-9">
                                <p>
                                    魔法盒私人定制依据汉方理论并结合现代生活的特点，
                                    将身体状态分为8种体质，每种体质分别代表着身体失去平衡需要调节的要素。
                                </p>
                                <div class="bg-pink-400 group-hover:bg-pink-600 h-full w-4 absolute top-0 left-0"> </div>
                            </div>
                        </div>
                        <div class="relative mb-4 mt-10 md:mt-0">
                            <div class="group w-full py-0 pr-2 pl-9">
                                <p>
                                    魔法盒私人定制的测试会使你迅速了解自己的体质，
                                    通过定制化的膳食营养补充，饮食调节，辅助运动改善体质，获得健康平衡状态。
                                </p>
                                <div class="bg-pink-400 group-hover:bg-pink-600 h-full w-4 absolute top-0 left-0"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white mt-6">
                <div class="grid columns-1 items-center mx-4 mb-12 pt-12 justify-center">
                    <img class="w-full" src="{{ asset('/img/check/type_contents_img.png') }}" alt="">
                </div>
                <div class="py-12 flex flex-col md:flex-row gap-x-10 md:gap-y-10 justify-center items-center text-center">
                    <x-button>
                        <a href="{{ route('check.type.start') }}">
                            {{ __('check_type') }}
                        </a>
                    </x-button>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute rounded-full bg-pink-300 text-pink-300 h-96 w-96 flex -top-44 items-center justify-center" style="z-index: -1">Circle</div>
</x-app-layout>
