<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public $timestamps = false;
    protected $table = 'buku';


    protected $fillable = ['judul','author','sinopsis','penerbit','cover_img'];
}
