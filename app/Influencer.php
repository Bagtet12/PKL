<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    protected $table ='influencers';
    protected $fillable = ['id','gambar', 'judul', 'deskripsi','link_instagram','createby','editby'];
}
