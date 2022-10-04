<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table = "sliders";
    protected $fillable = ['id','judul','gambar'];
}
