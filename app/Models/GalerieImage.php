<?php

namespace App\Models;

use App\Models\Galerie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GalerieImage extends Model
{
    use HasFactory;
    protected $fillable = [

        'path','galerie_id'
       
    ];
    public function galerie()
{
    return $this->belongsTo(Galerie::class);
}
}
