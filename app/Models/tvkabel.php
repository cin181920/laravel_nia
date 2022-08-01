<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tvkabel extends Model
{
    use HasFactory;
    protected $fillable = [
    'nomor_pegawai',
    'nama',
    'nomor_hp',
    'jenis_tv',
    'nomor_id',
    'pemakaian',
    'plafon',
    'roaming_ln',
    'beban_pegawai',
    'beban_perusahaan',
    ];
}
