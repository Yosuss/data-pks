<?php

namespace App\Http\Controllers;

use App\Models\data_pks_model;
use Illuminate\Http\Request;

class data_pks_controller extends Controller
{
    //
    public function index(){
        $data_pks = data_pks_model::all();
        return view('data_pks.data_pks', compact('data_pks'));
    }

    public function tambah(Request $request){
        $request->validate([
            'tanggal' => 'required',
            'nama_perusahaan' => 'required',
            // 'golongan' => 'required',
            // 'minimum' => 'required',
            // 'tarif_1' => 'required',
            // 'tarif_2' => 'required',
            // 'masa_perjanjian' => 'required',
        ],[
            'tanggal.required' => 'tanggal harus diisi.',
            'nama_perusahaan.required' => 'nama_perusahaan harus diisi.',
            // 'golongan.required' => 'golongan harus diisi.',
            // 'minimum.required' => 'minimum harus diisi.',
            // 'tarif_1.required' => 'tarif_1 harus diisi.',
            // 'tarif_2.required' => 'tarif_2 harus diisi.',
            // 'masa_perjanjian.required' => 'tarif_3 harus diisi.',
        ]);

        // simpan data ( simple )
        $data = new data_pks_model();
        $data->tanggal = $request->tanggal;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->golongan = $request->golongan;
        $data->minimum = $request->minimum;
        $data->tarif_1 = $request->tarif_1;
        $data->tarif_2 = $request->tarif_2;
        $data->tarif_3 = $request->tarif_3;
        $data->masa_perjanjian = $request->masa_perjanjian;
        $data->save();

        return redirect()->route('data_pks')->with('success', 'inputan berhasil ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        $data_pks = data_pks_model::findOrFail($id);
        return view('data_pks.data_pks-edit', compact('data_pks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'nama_perusahaan' => 'required',
            // 'golongan' => 'required',
            // 'minimum' => 'required',
            // 'tarif_1' => 'required',
            // 'tarif_2' => 'required',
            // 'masa_perjanjian' => 'required',
        ],[
            'tanggal.required' => 'tanggal harus diisi.',
            'nama_perusahaan.required' => 'nama_perusahaan harus diisi.',
            // 'golongan.required' => 'golongan harus diisi.',
            // 'minimum.required' => 'minimum harus diisi.',
            // 'tarif_1.required' => 'tarif_1 harus diisi.',
            // 'tarif_2.required' => 'tarif_2 harus diisi.',
            // 'masa_perjanjian.required' => 'masa_perjanjian harus diisi.',
        ]);

        $data = data_pks_model::findOrFail($id);
        try {
            $data->tanggal = $request->tanggal;
            $data->nama_perusahaan = $request->nama_perusahaan;
            $data->golongan = $request->golongan;
            $data->minimum = $request->minimum;
            $data->tarif_1 = $request->tarif_1;
            $data->tarif_2 = $request->tarif_2;
            $data->tarif_3 = $request->tarif_3;
            $data->masa_perjanjian = $request->masa_perjanjian;
            $data->save();
                return redirect()->route('data_pks');
        } catch (\Exception $e) {
            return redirect()->route('data_pks')->withErrors('Gagal mengupdate data.');
        }
        return redirect()->route('data_pks')->with('success', 'inputan berhasil ditambahkan');
    }

    public function hapus($id)
    {
        try {
            data_pks_model::where('id_data_pks', $id)->delete();
            return to_route('data_pks');
        } catch (\Exception $e) {
            return to_route('data_pks')->withErrors('gagal hapus');
        }
    }
}