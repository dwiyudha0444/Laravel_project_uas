<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //tambahkan kode untuk mapping ke tabel film
    protected $table = 'film';
    //mapping ke kolom fieldnya
    protected $fillable = ['genre','','judul','tgl_rilis','sinopsis','cover'];
}