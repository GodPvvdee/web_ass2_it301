@extends('layouts.app')
@section('content')

    <div class=" min-w-0  bg-white w-9/12 mb-6 shadow-lg rounded ">
        <a href="" class="float-right px-2 p-2 my-2 bg-gray-500 text-white rounded-md focus:outline-none focus:ring-2 ring-gray-300 ring-offset-2">
            Усан онгоц бүртгэх
        </a>
        <div class="">
            <!-- Projects table -->
            <table class="items-center w-full bg-transparent border-collapse" id="table-id">
                <thead>
                <tr>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Нэр
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Компани дугаар
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Төрөл
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Байршил
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($vessel as $v)
                    <tr>
                        <th
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                            {{ $v->vessel_name }}
                        </th>
                        <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            {{ $v->company_id }}
                        </td>
                        <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            {{ $v->vessel_type }}
                        </td>
                        <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            {{ $v->flag }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
