<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pks</title>
    @vite('resources/css/app.css')
    <style>
        table {
            border-collapse: collapse;
            /* Pastikan border pada tabel rapat */
        }

        th,
        td {
            border: 1px solid #d1d5db;
            /* Menambahkan border untuk th dan td */
        }
    </style>
</head>

<body class="bg-gray-100 py-8 px-4">
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Data PKS</h1>
        <table class="min-w-full bg-white border text-center border-black rounded-md shadow-sm">
            <thead>
                <tr class="text-centerz bg-gray-200 text-gray-600 border-b">
                    <th class="px-4 py-2">no</th>
                    <th class="px-4 py-2">tanggal</th>
                    <th class="px-4 py-2">Nama_perusahaan</th>
                    <th class="px-4 py-2">golongan</th>
                    <th class="px-4 py-2">pemakaian minimum</th>
                    <th class="px-4 py-2">tarif_1</th>
                    <th class="px-4 py-2">tarif_2</th>
                    <th class="px-4 py-2">tarif_3</th>
                    <th class="px-4 py-2">masa_perjanjian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr class="border-b text-centerz hover:bg-gray-50">
                        <td class="px-4 py-2 text-gray-700">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 text-gray-700">{{ $item->tanggal }}</td>
                        <td class="px-4 py-2 text-gray-700">{{ $item->nama_perusahaan }}</td>
                        <td class="px-4 py-2 text-gray-700">{{ $item->golongan }}</td>
                        <td class="px-4 py-2 text-gray-700">{{ $item->minimum }}</td>
                        <td class="px-4 py-2 text-gray-700">{{ $item->tarif_1 }}</td>
                        <td class="px-4 py-2 text-gray-700">{{ $item->tarif_2 }}</td>
                        <td class="px-4 py-2 text-gray-700">{{ $item->tarif_3 }}</td>
                        <td class="px-4 py-2 text-gray-700">{{ $item->masa_perjanjian }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
