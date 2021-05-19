@extends('layouts.app')
@section('content')

    <div class=" min-w-0  bg-white w-9/12 mb-6 shadow-lg rounded ">
        <div class="">
            <!-- Projects table -->
            <table class="items-center w-full bg-transparent border-collapse" id="table-id">
                <thead>
                <tr>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Компаны нэр
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Усан онгоцны нэр
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Ранк
                    </th>


                </tr>
                </thead>
                <tbody>
                @foreach($db as $d)
                    <tr>
                        <th
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                            <a href="{{ route('admin.jobsearch', [$d->rank]) }}">{{ $d->cname }}</a>
                        </th>
                        <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            {{ $d->vname }}
                        </td>
                        <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            {{ $d->rank }}
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
