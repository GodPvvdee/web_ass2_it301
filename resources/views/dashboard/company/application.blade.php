@extends('layouts.app')
@section('content')

    <form method="post" action="{{ route('company.create') }}">
        @csrf
        <div class="container">
            <div class="container mx-auto px-4 max-w-sm">
                <div class="rounded overflow-hidden shadow-lg p-5 mt-5 bg-white">
                    @if (session('message'))
                        <div class="col-sm-12">
                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif
                    <div class="mb-8">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Компаний нэр
                            <input name='cname' value="{{$com->company_name}}"  class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Хөлөг онгоц
                            <select name="vname" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal">
                                @foreach($vessel as $v)
                                    <option value="{{$v->vessel_name}}">{{ $v->vessel_name }} </option>
                                @endforeach
                            </select>
                        </label>
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Зэрэг
                            <select name="rank" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal">
                                @foreach($rank as $r)
                                    <option value="{{ $r->rank_id}}">{{ $r->rank_name}} </option>
                                @endforeach
                            </select>
                        </label>

                        <button type="submit" class="px-4 py-2 bg-indigo-200 border border-b-4 border-r-2 border-indigo-400 rounded-sm text-gray-800 font-semibold text-sm uppercase">Хүсэлт гаргах</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
