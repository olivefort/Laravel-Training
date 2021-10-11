<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;
    public function commentaires(){
        return $this->hasMany('App\Models\Commentaire');
    }
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }
    protected $fillable = [
        'titre',
        'article',
    ];
}
