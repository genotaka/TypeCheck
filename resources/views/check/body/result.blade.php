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
                    完了
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
