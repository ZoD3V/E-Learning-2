@extends('backend.layouts.app')

@section('content-admin')
    {{-- content --}}
    <div class="flex flex-1 items-center justify-center">
        <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2 mt-10">
            <div class="p-8 mt-6 lg:mt-0 rounded border bg-white">
                <table id="users" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <div class="p-2 rounded mb-5 bg-blue-500 text-white text-center cursor-pointer">
                        <a href="{{ route('b.manage.mapel.create') }}">Create</a>

                    </div>
                    <thead>
                        <tr class="bg-blue-400 bg-opacity-100 text-white">
                            <th class="px-2">ID</th>
                            <th class="px-2">Nama Mapel</th>
                            <th class="px-2">Kelas</th>
                            <th class="px-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mapel as $data)
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-2 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $loop->iteration }}</td>
                                <td class="text-md text-gray-900 font-light px-2 py-4 whitespace-nowrap">
                                    {{ $data->name }}
                                </td>
                                <td class="text-md text-gray-900 font-light px-2 py-4 whitespace-nowrap">
                                    {{ $data->service_mapel->name }}
                                </td>
                                <td class="text-md text-gray-900 font-light px-5 flex py-4 whitespace-nowrap">
                                    <a href="{{ route('b.manage.mapel.edit', $data->id) }}" class="mr-4">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </a>

                                    <form action="{{ route('backend.mapel.delete', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button>
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- end content --}}
@endsection
