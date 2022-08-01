<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listrik extends Model
{
    use HasFactory;
    protected $fillable = [
    'nomor_pegawai',
    'nama',
    'alamat',
    'nomor_kontrol',
    'tagihan',
    'biaya_admin',
    'pemakaian',
    'plafon',
    'beban_pegawai',
    'beban_perusahaan',
    'keterangan',

    ];
}
