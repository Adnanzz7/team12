<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'jenis', 'tanggal', 'lokasi', 'kuota', 'pamflet'];

    public function pendaftarans()
    {
        return $this->hasMany(PendaftaranLomba::class);
    }
}