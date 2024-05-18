<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $fillable = ['nis', 'nama' , 'kelas' ,'jk' ,'agama' ,'alamat' ,'foto'];
    public $visible = ['nis', 'nama' , 'kelas' ,'jk' ,'agama' ,'alamat', 'foto'];
    public $timestamps = true;

    // membuat relasi one to many ke model tabungan
    public function tabungan(){

        return $this->hasMany(tabungan::class, 'id_siswa');
    }
}
