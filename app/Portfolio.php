<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table ='portfolios';
    protected $fillable = ['id','gambar', 'judul', 'deskripsi','link'];
}
