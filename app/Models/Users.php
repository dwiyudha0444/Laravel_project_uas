<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //tambahkan kode untuk mapping ke tabel user
    protected $table = 'users';
    //mapping ke kolom fieldnya
    protected $fillable = ['nama','email','role','isactive'];
}