@extends('layouts.app')

@section('content')
    <div class="container">
        {{--       {{ $company  }}--}}
        <div class="container mx-auto px-4 max-w-sm">
            <div class="rounded overflow-hidden shadow-lg p-5 mt-5 bg-white">

                <div class="mb-8">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Нэр
                        <input value="{{ $company->company_name }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Холбогдох хүн
                        <input value="{{ $company->contact_person }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        И-мэйл
                        <input value="{{ $company->email }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Утас
                        <input value="{{ $company->phone }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Хаяг байршил
                        <input value="{{ $company->address }}" disabled class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection
