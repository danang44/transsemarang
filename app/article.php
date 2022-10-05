<?php

namespace App;
use App\user;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table = "article";
    protected $fillable = ['id','date','title','thumb','intro','content','cat','tmstamp','iduser','flag','art_seo','id_bidang'];

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'id');
    }

}
