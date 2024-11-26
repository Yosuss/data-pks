@extends('template')
@section('konten')
    <div class="bg-gray-100 dashboard flex capitalize">
        <!-- Dashboard Menu -->
        <div class="bg-gray-100 w-2/12 h-screen items-center justify-center text-center">
            <a href="{{ url('/') }}">
                {{-- <div class="my-10 mx-6 mt-14 font-bold text-2xl">logo</div> --}}
                <img src="{{ asset('aset/logo-tirta.png') }}" alt="" class="my-10 mx-6 mt-16 w-20">
            </a>
            <div class="list gap-2 justify-center items-center m-6 border-b-2">
                <a href="{{ url('/') }}">
                    <div class="bg-white px-4 py-1 shadow text-left my-4 rounded-lg">
                        <i class="bi bi-chat-right-dots-fill"></i>
                        data pks
                    </div>
                </a>
            </div>
            <a href="{{ url('/login') }}">
                <div class="logout">
                    <button
                        class="bg-red-500 hover:bg-red-600 text-white font-bold px-6 py-1 shadow rounded-lg">logout</button>
                </div>
            </a>
        </div>
        <!-- Dashboard Menu end -->

        <!-- Main Dashboard -->
        <div class="main-dashboard w-10/12 bg-white rounded-3xl">

            {{-- error --}}
            @include('component.error')
            {{-- error end --}}

            <!-- Navbar -->
            @include('component.navbar')
            <!-- Navbar end -->

            <!-- Dashboard field -->
            @include('component.tambah')

            <div class="form p-4">
                <table action="" class="text-center border-2 w-full">
                    <thead id="nav-data" class="nav-data">
                        <th class="font-bold border-2 py-1">no</th>
                        <th class="font-bold border-2 py-1">tanggal</th>
                        <th class="font-bold border-2 py-1">nama_perusahaan</th>
                        <th class="font-bold border-2 py-1">minimum</th>
                        <th class="font-bold border-2 py-1">tarif_1</th>
                        <th class="font-bold border-2 py-1">tarif_2</th>
                        <th class="font-bold border-2 py-1">tarif_3</th>
                        <th class="font-bold border-2 py-1">masa_perjanjian</th>
                        <th colspan="2" class="font-bold border-2 py-1">Aksi</th>
                    </thead>

                    @foreach ($data_pks as $item)
                        <tbody id="data" class="data">
                            <td class="border-2 py-1">{{ $loop->iteration }}</td>
                            <td class="border-2 py-1">{{ $item->tanggal }}</td>
                            <td class="border-2 py-1">{{ $item->nama_perusahaan }}</td>
                            <td class="border-2 py-1">{{ $item->minimum }}</td>
                            <td class="border-2 py-1">{{ $item->tarif_1 }}</td>
                            <td class="border-2 py-1">{{ $item->tarif_2 }}</td>
                            <td class="border-2 py-1">{{ $item->tarif_3 }}</td>
                            <td class="border-2 py-1">{{ $item->masa_perjanjian }}</td>
                            <td class="flex">
                                <div class="w-1/2">
                                    @include('component.btn-edit')
                                </div>
                                <div class="w-1/2">
                                    @include('component.btn-hapus')
                                </div>
                            </td>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <!-- Dashboard field end -->
        </div>
        <!-- Main Dashboard end -->
    </div>
@endsection