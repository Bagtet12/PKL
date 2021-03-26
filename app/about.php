<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $table ='about';
    protected $fillable = ['judul','deskripsi','visi','misi','nama_product','quotes','editby' ];
}
