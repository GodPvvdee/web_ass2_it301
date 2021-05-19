@extends('layouts.app')

@section('content')
    <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
        }
    </style>
{{--    <h1>HI</h1>--}}
    <form method="post" action="{{ route('sailor.store') }}"  id="regForm">
        @csrf
        <div class="container">
            <div class="mx-auto px-4 ">
                <div class="rounded overflow-hidden shadow-lg p-5 mt-2 bg-white w-full">
                    @if (session('message'))
                        <div class="col-sm-12">
                            <div class="py-3 px-2 my-2 bg-green-300 text-green-800 rounded border border-green-600">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif
                    <div class="mb-2 w-96">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Нэр
                            <input name='sailor_name' value=""  type="text" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >
                            @if ($errors->has('sailor_name'))
                                <span class="text-danger">{{ $errors->first('sailor_name') }}</span>
                            @endif
                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Төрсөн өдөр
                            <input name='date_of_birth' value="" type="date"  class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal">
                            @if ($errors->has('date_of_birth'))
                                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                            @endif
                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Гэр бүлийн байдал
                            <input name='marital_status' type="text" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >
                            @if ($errors->has('marital_status'))
                                <span class="text-danger">{{ $errors->first('marital_status') }}</span>
                            @endif
                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Хаяг
                            <input name='address'  type="text" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal">
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Өндөр
                            <input name='height' type="text" value=""  class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >
                            @if ($errors->has('height'))
                                <span class="text-danger">{{ $errors->first('height') }}</span>
                            @endif
                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Жин
                            <input name='weight' value=""  type="text" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >
                            @if ($errors->has('weight'))
                                <span class="text-danger">{{ $errors->first('weight') }}</span>
                            @endif
                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Цусны бүлэг
                            <input name='blood_type' value=""  type="text" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >
                            @if ($errors->has('blood_type'))
                                <span class="text-danger">{{ $errors->first('blood_type') }}</span>
                            @endif
                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Гуталын размер
                            <input name='shoe_size'  type="text" value=""  class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >
                            @if ($errors->has('shoe_size'))
                                <span class="text-danger">{{ $errors->first('shoe_size') }}</span>
                            @endif
                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Ажил эрхлэлтийн байдал
                            <select name="job_status" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" >
                                <option></option>
                                <option value="1">Ажилгүй</option>
                                <option value="2">Ажилтай</option>
                                <option value="3">Амралт</option>
                                <option value="4">Бэлэн</option>
                                <option value="5">Тэтгэвэрт гарсан</option>
                            </select>
                            @if ($errors->has('job_status'))
                                <span class="text-danger">{{ $errors->first('job_status') }}</span>
                            @endif
                        </label>
                        <button type="submit" class="px-4 py-2 bg-blue-400 border border-b-4 border-r-2 border-indigo-400 rounded-sm text-gray-800 font-semibold text-sm uppercase">Бүртгэх</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript">

        $(document).ready(function() {
            $("#regForm").validate({
                rules: {
                    sailor_name: "required",
                    date_of_birth: "required",
                    marital_status: "required",
                    address: "required",
                    height: "required",
                    weight: "required",
                    blood_type: "required",
                    shoe_size: "required",
                    job_status: "required",

                },
                messages: {
                    sailor_name: "Нэрээ оруулна уу!!",
                    date_of_birth: "Төрсөн он сараа оруулна уу!!",
                    marital_status: "Гэр бүлийн байдал !!",
                    address: "Хаягаа оруулна уу!!",
                    height: "Хоосон талбар",
                    weight: "Хоосон талбар",
                    blood_type: "Хоосон талбар",
                    shoe_size: "Хоосон талбар",
                    job_status: "Хоосон талбар",
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

@endsection
