@extends('layouts.app')
@section('content')

    <div class="md:px-32 py-8 w-full">
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-indigo-300 text-black">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Ажилтны нэр</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Албан тушаал</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Усан онгоц</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Ажил эхлэх өдөр</td>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Боомт</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Ажил дуусах өдөр</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Буух боомт</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Гэрээний хугацаа</td>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Гэрээ дуусах хугацаа</td>

                </tr>
                </thead>
                <tbody class="text-gray-700">
                @foreach($history as $h)
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4">{{ $h->sailor_id }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $h->rank_id }}</td>
                        <td class="text-left py-3 px-4">{{ $h->vessel_id }}</td>
                        <td class="text-left py-3 px-4">{{ $h->sign_on_date }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $h->sign_on_port }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $h->sign_off_date }}</td>
                        <td class="text-left py-3 px-4">{{ $h->sign_off_port }}</td>
                        <td class="text-left py-3 px-4">{{ $h->contract_perion }}</td>
                        <td class="text-left py-3 px-4">{{ $h->contact_end_date }}</td>

                        {{--                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>--}}
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
