<?php

namespace App;
use Illuminate\Database\Eloquent\Softdeletes;
use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    use SoftDeletes;
    protected $table = "links";
    protected $fillable = ['id','created_by','title','link','image','delete_by'];
}
