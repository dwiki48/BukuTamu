<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataPegawai extends Model
{
    protected $primaryKey = 'id_pegawai';
    protected $table = 'data_pegawais';
    protected $fillable = [
        'nip', 'nama_pegawai', 'jabatan'
    ];
}
