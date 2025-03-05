<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class data_pks extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('data_pks')->insert([
            [
                'tanggal' => '2021-05-27',
                'nama_perusahaan' => 'KPSPAM KALI BARU',
                'golongan' => 'khusus',
                'minimum' => '200 m3 / bulan',
                'tarif_1' => '3200 m3',
                'tarif_2' => '3200 m3',
                'tarif_3' => '3200 m3',
                'masa_perjanjian' => '',
            ],
            [
                'tanggal' => '2021-05-27',
                'nama_perusahaan' => 'KPSPAM RADEN TIRTA KENCANA	',
                'golongan' => 'khusus',
                'minimum' => '200 m3 / bulan',
                'tarif_1' => '3200 m3',
                'tarif_2' => '',
                'tarif_3' => '',
                'masa_perjanjian' => 'Hingga adanya permintaan pengakhiran',
            ],
            [
                'tanggal' => '2024-01-24',
                'nama_perusahaan' => 'PT ANEKA MITRA GEMILANG',
                'golongan' => 'industri',
                'minimum' => '500 m3 / Bulan',
                'tarif_1' => '17900 m3',
                'tarif_2' => '18900 m3	',
                'tarif_3' => '',
                'masa_perjanjian' => 'Hingga diakhiri oleh salah satu PIHAK',
            ],
            [
                'tanggal' => '2024-01-02',
                'nama_perusahaan' => 'PT ANEKA MITRA GEMILANG',
                'golongan' => 'industri',
                'minimum' => '500 m3 / Bulan',
                'tarif_1' => '17900 m3',
                'tarif_2' => '18900 m3	',
                'tarif_3' => '',
                'masa_perjanjian' => 'Hingga diakhiri oleh salah satu PIHAK',
            ],
            [
                'tanggal' => '2024-01-05',
                'nama_perusahaan' => 'PT PRAKARSA ALAM SEGAR',
                'golongan' => 'industri',
                'minimum' => '400 m3 / Bulan',
                'tarif_1' => '17900 m3',
                'tarif_2' => '18900 m3',
                'tarif_3' => '',
                'masa_perjanjian' => 'Hingga diakhiri oleh salah satu PIHAK',
            ],
            [
                'tanggal' => '2022-02-17',
                'nama_perusahaan' => 'PT TEMPO LAND',
                'golongan' => 'industri',
                'minimum' => '900 m3 / Bulan',
                'tarif_1' => '9800',
                'tarif_2' => '14600',
                'tarif_3' => '',
                'masa_perjanjian' => '',
            ],
            [
                'tanggal' => '2021-08-02',
                'nama_perusahaan' => 'PT ANGEL LANGGENG',
                'golongan' => 'industri',
                'minimum' => '1000 m3 / Bulan',
                'tarif_1' => '9800',
                'tarif_2' => '14600',
                'tarif_3' => '',
                'masa_perjanjian' => 'Hingga adanya permintaan pengakhiran',
            ],
            [
                'tanggal' => '2022-08-24	',
                'nama_perusahaan' => 'Bank BJB syariah kantor cabang bekasi	',
                'golongan' => '',
                'minimum' => '',
                'tarif_1' => '',
                'tarif_2' => '',
                'tarif_3' => '',
                'masa_perjanjian' => '2 Tahun',
            ],
            [
                'tanggal' => '2020-06-05',
                'nama_perusahaan' => 'PT. Bank tabungan negara ( persero ) TBK.',
                'golongan' => '',
                'minimum' => '',
                'tarif_1' => '2.500 / Transaksi',
                'tarif_2' => '',
                'tarif_3' => '',
                'masa_perjanjian' => '2 Tahun',
            ],
            [
                'tanggal' => '2018-03-20',
                'nama_perusahaan' => 'PT Bank Mandiri ( Persero ) TBK.',
                'golongan' => ' ',
                'minimum' => '',
                'tarif_1' => '2.500 / Transaksi',
                'tarif_2' => '',
                'tarif_3' => '',
                'masa_perjanjian' => '1 Tahun',
            ],
            [
                'tanggal' => '2021-05-27',
                'nama_perusahaan' => 'KPSPAM Tirta mulya - Kelurahan marga mulya',
                'golongan' => '',
                'minimum' => '200 m3 / bulan	',
                'tarif_1' => '3200 m3',
                'tarif_2' => '',
                'tarif_3' => '',
                'masa_perjanjian' => 'Hingga adanya permintaan pengakhiran dari PIHAK KEDUA',
            ],
            [
                'tanggal' => '2022-01-05',
                'nama_perusahaan' => 'PT POS INDONESIA ( PERSEDO )',
                'golongan' => '',
                'minimum' => '',
                'tarif_1' => '3 .000 / Transaksi	',
                'tarif_2' => '',
                'tarif_3' => '',
                'masa_perjanjian' => '2 Tahun',
            ],
            [
                'tanggal' => '2017-08-01',
                'nama_perusahaan' => 'PT LOGOS INDONEESIA BEKASI ONE',
                'golongan' => '',
                'minimum' => '2000 m3',
                'tarif_1' => '17.000',
                'tarif_2' => '',
                'tarif_3' => '',
                'masa_perjanjian' => '2 Tahun',
            ],
            [
                'tanggal' => '2021-08-30',
                'nama_perusahaan' => 'PT PUTRAPRASENDA BERJAYA',
                'golongan' => '',
                'minimum' => '250 m3 / bulan',
                'tarif_1' => '7.400',
                'tarif_2' => '11.100',
                'tarif_3' => '',
                'masa_perjanjian' => 'Hingga diakhiri oleh salah satu PIHAK',
            ],
        ]);
    }
}