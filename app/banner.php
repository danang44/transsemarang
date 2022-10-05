<?php

namespace App;
use App\user;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table = "banners";
    protected $fillable = ['id','deskripsi','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
