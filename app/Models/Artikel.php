<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Artikel extends Model
{
    use HasFactory; //Testing the database with fake data
    protected $fillable = [
        'productnaam',
        'productbeschrijving',
        'leverancier',
        'emailadres',
        'user_id',
    ];
}
