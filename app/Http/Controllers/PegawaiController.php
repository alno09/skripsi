<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CTalpen;

class PegawaiController extends Controller
{
    //alasan penting
    public function riwayatAlpen() {
        return view('pegawai/ct-alpen');
    }

    public function alpenSimpan(Request $Request) {
        CTalpen::create([
            'tgl_mul' => $Request->tgl_mul,
            'tgl_sls' => $Request->tgl_sls,
            'alamat' => $Request->alamat,
            'keterangan' => $Request->keterangan
        ]);
        return redirect ('pegawai/ct-alpen');
    }
}
