<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = "Track";
    protected $fillable = ['id','origin', 'toward', 'kor', 'urut','points_a', 'points_b', 'color', 'jam_operasional','jumlah_bis', 'jumlah_halte'];
}
