<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    use HasFactory;
    protected $table = 'article_tag'; // quand elle est différente du nom du modele
    public $id = false; // pour ne pas utiliser la méthode ->id
    public $timestamps = false;  // pour ne pas utiliser la méthode ->timestamps
    protected $fillable = [
        'tag_id',
        'article_id',
    ];
}
