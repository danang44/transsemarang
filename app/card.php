<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class card extends Model
{
    use SoftDeletes;
    protected $table = "cards";
    protected $fillable = ['id','created_by','name','desc','image','delete_by'];
}
