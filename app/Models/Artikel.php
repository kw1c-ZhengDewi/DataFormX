<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
     use HasFactory;

    protected $fillable = [
        'artikelnaam',
        'artikelbeschrijving',
        'leverancier',
        'emailadres',
    ];
}   
