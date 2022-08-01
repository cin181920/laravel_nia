<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pam extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_pegawai',
        'nama',
        'alamat',
        'nomor_rekening',
        'pemakaian',
        'plafon',
        'beban_perusahaan',
        'keterangan',
    ];
}
