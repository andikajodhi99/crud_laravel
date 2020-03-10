<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $primaryKey = "nim";
    protected $table = "mahasiswa";
    public $incrementing = false;
}
