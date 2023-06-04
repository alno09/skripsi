<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTbesar extends Model
{
    protected $table = 'ct_bsr';
    protected $fillable = ['id_surat', 'jns_ct', 'nip', 'nama', 'golongan', 'jabatan', 'tgl_mul', 'tgl_sls', 'durasi', 'alamat', 'keterangan', 'status'];
}
