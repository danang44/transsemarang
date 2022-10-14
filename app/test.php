<?php

namespace App;
use Illuminate\Database\Eloquent\Softdeletes;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use SoftDeletes;
    protected $table = "tests";
    protected $fillable = ['id','date','title', 'thumb', 'intro', 'content', 'iduser','flag', 'art_seo'];
}

