<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahan';
    // table itu adalah property laravel yang didalamnya terkoneksi dengan nama table
    // yang mau kita tampilkan datanya, tetapi hanya dapat diakses di dalam class
    // model tersebut ataupun turunan nya

    protected $fillable = ['id','nama','kec_id'];
    // fillable adalah model variabel dalam model eluquent yang tugasnya 
    // membatasi kolom mana yang dapat diisi atau diinput 
}
