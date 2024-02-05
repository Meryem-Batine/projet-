<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable= [
        "demandeur",
        "contact",
        "dob",
        "heure",
        "nature",
        "desc",
        "moyen",
        "cout",
        "techn",
        "trv",
        "rpn"=> 'nullable|string|max:255',
        "date",
        "debut",
        "fin",
    ];
}
