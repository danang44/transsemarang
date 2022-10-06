<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;
class slider extends Model
{
    use SoftDeletes;
    protected $table = "sliders";
    protected $fillable = ['id','judul','gambar','user_id','created_by','deleted_by'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
