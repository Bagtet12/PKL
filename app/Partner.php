<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table ='partners';
    protected $fillable = ['id','gambar', 'judul','createby','editby'];
}
