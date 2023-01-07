@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
@endsection

@section('javascript')

  <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>


@endsection

@section('content')
<div class="max-w-full max-h-screen flex flex-row">
    {{-- sidebar --}}
    <div class="w-[250px] bg-white flex flex-col space-y-12 items-center h-screen border-r overflow-y-auto transition-all duration-300">
        <div class="p-3"><img src="{{asset('assets/images/Logo.png')}}" class="h-9" alt="Logo" /></div>
        <div class="flex flex-col justify-start items-start w-full space-y-4">
            <div class="flex flex-row items-start justify-start px-6 py-2 hover:bg-blue-200 w-full cursor-pointer">
                <div class="text-blue-600 text-xl">
                    <ion-icon name="grid"></ion-icon>
                </div>
            <span class="ml-3 font-light">Dashboard</span>
            </div>

            <span class="text-center px-6 py-2">Menu</span>

            <div class="flex flex-row items-start justify-start px-6 py-1.5 hover:bg-blue-200 w-full cursor-pointer">
                <div class="text-blue-600 text-xl">
                    <ion-icon name="tablet-landscape"></ion-icon>
                </div>
            <span class="ml-3 font-light text-[15px]">Manajemen Guru</span>
            </div>

            <div class="flex flex-row items-start justify-start px-6  py-1.5 hover:bg-blue-200 w-full cursor-pointer">
                <div class="text-blue-600 text-xl">
                    <ion-icon name="school"></ion-icon>
                </div>
            <span class="ml-3 font-light text-[15px]">Manajemen Siswa</span>
            </div>


            <div class="flex flex-row items-start justify-start px-6  py-1.5 hover:bg-blue-200 w-full cursor-pointer">
                <div class="text-blue-600 text-xl">
                    <ion-icon name="phone-portrait"></ion-icon>
                </div>
            <span class="ml-3 font-light text-[15px]">Manajemen Mapel</span>
            </div>

            <div class="flex flex-row items-start justify-start px-6  py-1.5 hover:bg-blue-200 w-full cursor-pointer">
                <div class="text-blue-600 text-xl">
                    <ion-icon name="book"></ion-icon>
                </div>
            <span class="ml-3 font-light text-[15px]">Manajemen Materi</span>
            </div>


            <div class="flex flex-row items-center justify-start px-6  py-1.5 hover:bg-blue-200 w-full cursor-pointer">
                <div class="text-blue-600 text-xl">
                    <ion-icon name="clipboard"></ion-icon>
                </div>
            <span class="ml-3 font-light text-[15px]">Manajemen Kelas</span>
            </div>
        </div>

    </div>
    <div class="flex-1">
        <div class="w-full max-w-full">
                    <div class="h-[60px] border-b w-full flex items-center justify-end">
            <div class="rounded-md px-5 text-black items-center flex">
                <ion-icon name="create"></ion-icon>
                <span class="p-2">Edit Profile</span>
            </div>
            <div class="bg-red-500 rounded-md px-5 text-white items-center flex cursor-pointer mr-2">
                <ion-icon name="log-out"></ion-icon>
                <span class="p-2">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </span>
            </div>
            </div>
        </div>
    </div>
    {{-- navbar --}}
</div>
@endsection



