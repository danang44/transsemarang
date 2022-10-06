<?php

namespace App;
use App\user;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;
class banner extends Model
{
    use SoftDeletes;
    protected $table = "banners";
    protected $fillable = ['id','deskripsi','user_id','created_by','deleted_by'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
