<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    // table itu adalah property laravel yang didalamnya terkoneksi dengan nama table
    // yang mau kita tampilkan datanya, tetapi hanya dapat diakses di dalam class
    // model tersebut ataupun turunan nya

    protected $fillable = ['id','kode','nama','tmp_lahir','tgl_lahir','gender','email','alamat','kelurahan_id'];
    // fillable adalah model variabel dalam model eluquent yang tugasnya 
    // membatasi kolom mana yang dapat diisi atau diinput 
}
