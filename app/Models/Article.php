<?php

namespace App\Models;

use App\Models\ArticleImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [

        'Titre','Contenu','Date'
       
    ];
    public function images()
    {
        return $this->hasMany(ArticleImage::class);
    }
}
