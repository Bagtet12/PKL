<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creative_Video extends Model
{
    protected $table ='creative__videos';
    protected $fillable = ['id','gambar', 'judul', 'deskripsi','link_video','createby','editby'];
}
