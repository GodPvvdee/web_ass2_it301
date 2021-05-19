@extends('layouts.app')

@section('content')
    <div class="container">
{{--       {{ $user  }}--}}
        <div class="container mx-auto px-4 max-w-sm">
            <div class="rounded overflow-hidden shadow-lg p-5 mt-5 bg-white">

                <div class="mb-8">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Нэр
                        <input value="{{ $user->sailor_name }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Төрсөн огноо
                        <input value="{{ $user->date_of_birth }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Хаяг
                        <input value="{{ $user->marital_status }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Өндөр
                        <input value="{{ $user->address }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Жин
                        <input value="{{ $user->height }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Цусны бүлэг
                        <input value="{{ $user->weight }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Гутлын размер
                        <input value="{{ $user->shoe_size }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Ажлын төлөв
                        <input value="{{ $user->job_status }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>

                </div>
            </div>
        </div>
    </div>
@endsection
