<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    public $fillable = ['jumlah', 'tgl', 'id_siswa'];
    public $visible = ['jumlah', 'tgl', 'id_siswa'];
    public $timestamps = true;

    // relasi many to many siswa
    public function siswa(){

        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

}
