<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;
    protected $table = 'periksa';
    // table itu adalah property laravel yang didalamnya terkoneksi dengan nama table
    // yang mau kita tampilkan datanya, tetapi hanya dapat diakses di dalam class
    // model tersebut ataupun turunan nya

    protected $fillable = ['id','tanggal','berat','tinggi','tensi','keterangan','pasien_id','dokter_id'];
    // fillable adalah model variabel dalam model eluquent yang tugasnya 
    // membatasi kolom mana yang dapat diisi atau diinput 
}
