<?php

namespace App\Models;

use App\Models\GalerieImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galerie extends Model
{
    use HasFactory;
    protected $fillable = [

        'Titre','Contenu','Date'
       
    ];
    public function images()
    {
        return $this->hasMany(GalerieImage::class);
    }
}
