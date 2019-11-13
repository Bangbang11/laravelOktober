<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title','content','author','article_image'
    ];

    public static function valid() {
        return array(
            'content' => 'required'
        );
    }

    public function comments(){
        return $this->hasMany('App\Comment','article_id');
    }

    public function img_article()
    {
        //cek file exist di folder tempat file image 
        if (file_exists(public_path().'/images/article/'.$this->article_image) && $this->article_image !=null ) {
            //jika ada tampilkan image hasil upload 
            return '/images/article/'.$this->article_image;
        } else {
            //jika tidak ada tampilkan gambar default
            return url('/img/def-up.jpg');
        }
    }
}
