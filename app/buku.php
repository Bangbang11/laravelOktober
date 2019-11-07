<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $fillable = [
        'judul_buku','pengarang','penerbit','tahun_terbit'
    ];
}
