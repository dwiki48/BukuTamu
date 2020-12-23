<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukuTamu extends Model
{
    protected $primaryKey = 'id_buku';
    protected $table = 'buku_tamus';
    protected $fillable = [
        'id_pegawai', 'nik', 'nama_tamu', 'pekerjaan', 'alamat', 'noHP', 'keperluan', 'foto'
    ];
}
