<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['email','nama_admin','notel','alamat'];
}
