<?php

namespace App\Models;

use App\Models\Article;
use App\Models\GalerieImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleImage extends Model
{
    use HasFactory;
    protected $fillable = [

        'path','article_id'
       
    ];
    public function article()
{
    return $this->belongsTo(Article::class);
}
}
