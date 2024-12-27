@extends('template')
@section('konten')
@include('component.error')
    <div class="bg-gray-200 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md ">
            <h2 class="text-2xl font-bold mb-6 text-center capitalize">edit data</h2>
            <form action="{{ route('data_pks.update', $data_pks->id_data_pks) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_data_pks" class="block text-xl font-medium text-gray-700">id data_pks</label>
                    <div name="id_data_pks" id="id_data_pks">{{ $data_pks->id_data_pks }}</div>
                </div>
                <div class="mb-4">
                    <label for="tanggal" class="block text-xl font-medium text-gray-700">tanggal</label>
                    <input type="date" name="tanggal" id="tanggal"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        value="{{ $data_pks->tanggal }}">
                </div>
                <div class="mb-4">
                    <label for="nama_perusahaan" class="block text-xl font-medium text-gray-700">nama_perusahaan</label>
                    <input type="text" name="nama_perusahaan" id="nama_perusahaan"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        value="{{ $data_pks->nama_perusahaan }}">
                </div>
                <div class="mb-4">
                    <label for="golongan" class="block text-xl font-medium text-gray-700">golongan</label>
                    <input type="text" name="golongan" id="golongan"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        value="{{ $data_pks->golongan }}">
                </div>
                <div class="mb-4">
                    <label for="minimum" class="block text-xl font-medium text-gray-700">pemakaian minimum</label>
                    <input type="text" name="minimum" id="minimum"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        value="{{ $data_pks->minimum }}">
                </div>
                <div class="mb-4">
                    <label for="tarif_1" class="block text-xl font-medium text-gray-700">tarif_1</label>
                    <input type="text" name="tarif_1" id="tarif_1"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        value="{{ $data_pks->tarif_1 }}">
                </div>
                <div class="mb-4">
                    <label for="tarif_2" class="block text-xl font-medium text-gray-700">tarif_2</label>
                    <input type="text" name="tarif_2" id="tarif_2"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        value="{{ $data_pks->tarif_2 }}">
                </div>
                <div class="mb-4">
                    <label for="tarif_3" class="block text-xl font-medium text-gray-700">tarif_3</label>
                    <input type="text" name="tarif_3" id="tarif_3"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        value="{{ $data_pks->tarif_3 }}">
                </div>
                <div class="mb-4">
                    <label for="masa_perjanjian" class="block text-xl font-medium text-gray-700">masa_perjanjian</label>
                    <input type="text" name="masa_perjanjian" id="masa_perjanjian"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        value="{{ $data_pks->masa_perjanjian }}">
                </div>
                <div class="btn flex gap-2">
                    <a href="{{ route('data_pks') }}"
                        class="w-full flex justify-center items-center shadow-md bg-gray-400 text-white p-2 rounded-md hover:bg-gray-700">
                        <button type="button">kembali</button>
                    </a>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white p-2 rounded-md shadow-md hover:bg-blue-700">update</button>
                </div>
            </form>
        </div>

    </div>
@endsection
