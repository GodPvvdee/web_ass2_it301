@extends('layouts.app')
@section('content')

    <form method="post" action="{{ route('admin.burtheh', [1]) }}">
        @csrf
        <div class="container">
            <div class="mx-auto px-4 ">
                <div class="rounded overflow-hidden shadow-lg p-5 mt-2 bg-white w-full">
                    @if (session('message'))
                        <div class="col-sm-12">
                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif
                    <div class="mb-2 w-96">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Ажилтны нэр
                            <select name="sailor_id" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >
                                @foreach($z as $z)
                                    <option value="{{$z->sailor_id}}">{{ $z->sailor_name }}{{ $z->job_status }}</option>
                                @endforeach
                            </select>
                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Ранк
                            <input name='rank_id' value="{{ $rankid }}"  class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">

                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Усан онгоцны дугаар
                            <input name='vessel_id' value="{{ $vid->id }}"  class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">

                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Ажил эхлэх өдөр
                            <input name='sign_on_date' value=""  type="date" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal">

                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Боомт
                            <input name='sign_on_port' type="text" value=""  class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >

                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Ажил дуусах өдөр
                            <input name='sign_off_date' value=""  type="date" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >

                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                           Буух боомт
                            <input name='sign_off_port' value=""  type="text" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >

                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Гэрээний хугацаа
                            <input name='contract_perion' value=""  class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >

                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Гэрээ дуусах хугацаа
                            <input name='contact_end_date' value=""  type="date" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">

                        </label>
                        <button type="submit" class="px-4 py-2 bg-blue-400 border border-b-4 border-r-2 border-indigo-400 rounded-sm text-gray-800 font-semibold text-sm uppercase">Бүртгэх</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
