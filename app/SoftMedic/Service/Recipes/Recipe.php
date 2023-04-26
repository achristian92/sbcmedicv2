<?php

namespace App\SoftMedic\Service\Recipes;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recetas';

    protected $guarded = ['id'];
}
