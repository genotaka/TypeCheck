<x-app-layout>
    @section('title', 'BodyCheck')

    <x-slot name="header">
    </x-slot>

    <div class="pb-6 md:py-12 z-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center pb-4 md:pb-12">
                <h2 class="text-base md:text-pink-600 font-semibold tracking-wide uppercase">body check</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white md:text-gray-900 sm:text-4xl">{{ __('body_info_title') }}</p>
                <p class="mt-4 max-w-2xl md:text-xl text-gray-500 lg:mx-auto">{{ __('body_info_description') }}</p>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg md:mt-6">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-2 md:grid-cols-4">
                        @foreach($body_data as $body_data_row)
                            <div class="flex text-start justify-center items-end md:items-center">
                                <img class="w-2/3 md:w-20" src="{{$body_data_row->mark_path}}" alt="status">
                                <h3 class="text-blue-400 md:text-sm mt-2 md:mt-4">{{$body_data_row->description}}</h3>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-10">
                        <div class="relative mb-4 mt-10 md:mt-0">
                            <div class="group w-full py-0 pr-2 pl-9">
                                <p>
                                    能量摄入＞能量消耗＝长胖<br>
                                    肥胖根本的原因是摄入的热量,长期大于消耗的热量,过多的热量以脂肪的形式储存在体内。
                                </p>
                                <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-4 absolute top-0 left-0"> </div>
                            </div>
                        </div>
                        <div class="relative mb-4 mt-10 md:mt-0">
                            <div class="group w-full py-0 pr-2 pl-9">
                                <p>
                                    不同的人受遗传基因，生理特征，生活方式的影响，身体对热量的摄入，
                                    体内代谢和调节过程均有差异,导致脂肪的堆积部位不同，形成常见的肥胖类型。
                                </p>
                                <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-4 absolute top-0 left-0"> </div>
                            </div>
                        </div>
                        <div class="relative mb-4 mt-10 md:mt-0">
                            <div class="group w-full py-0 pr-2 pl-9">
                                <p>
                                    魔法盒私人定制将常见的肥胖类型分为苹果型(内脏脂肪型肥胖),鸭梨型(皮下脂肪型肥胖)，花生型（水肿型肥胖），菠萝型（混合型肥胖）。
                                </p>
                                <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-4 absolute top-0 left-0"> </div>
                            </div>
                        </div>
                        <div class="relative mb-4 mt-10 md:mt-0">
                            <div class="group w-full py-0 pr-2 pl-9">
                                <p>
                                    每个人肥胖的原因和特点不同，瘦身首先需要了解自己的体质，找到适合自己的方法。
                                </p>
                                <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-4 absolute top-0 left-0"> </div>
                            </div>
                        </div>
                        <div class="relative mb-4 mt-10 md:mt-0">
                            <div class="group w-full py-0 pr-2 pl-9">
                                <p>
                                    魔法盒私人定制的测试会使你迅速了解自己的体质，通过定制化的膳食营养补充，饮食调节，辅助运动有效地达到瘦身塑形效果。
                                </p>
                                <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-4 absolute top-0 left-0"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white mt-6">
                <div class="py-12 flex flex-col md:flex-row gap-x-10 md:gap-y-10 justify-center items-center text-center">
                    <x-button>
                        <a href="{{ route('check.body.start') }}">
                            {{ __('check_body') }}
                        </a>
                    </x-button>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute rounded-full bg-blue-300 text-blue-300 h-96 w-96 flex -top-44 items-center justify-center" style="z-index: -1">Circle</div>
</x-app-layout>
