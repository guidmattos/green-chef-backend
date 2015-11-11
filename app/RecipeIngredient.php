<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ingredient;

class RecipeIngredient extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recipe_ingredients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_recipe', 'id_ingredient', 'quantity'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}