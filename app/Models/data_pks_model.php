<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class data_pks_model extends Model
{
    //
    protected $table = 'data_pks';
    protected $primaryKey = 'id_data_pks';
    public $filllable = [
        'tanggal',
        'nama_perusahaan',
        'golongan',
        'minimum',
        'tarif_1',
        'tarif_2',
        'tarif_3',
        'masa_perjanjian',
    ]
;}