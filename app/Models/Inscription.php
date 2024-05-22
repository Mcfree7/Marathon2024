<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [

        'Nom','Prenom','Email','Nationalite','Telephone','Genre','Categorie','Passport','Photo'
       
    ];
    use HasFactory;
}
