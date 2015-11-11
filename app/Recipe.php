<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RecipeIngredient;
use App\Ingredient;

class Recipe extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recipes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'unit_value', 'image', 'preparation'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function ingredients() {

        $recipeIngredients = $this->hasMany('App\RecipeIngredient', 'id_recipe', 'id')->get();
        $ingredients = [];
        $counter = 0;
        foreach ($recipeIngredients as $recipeIngredient) {
            $ingredient = Ingredient::where('id', $recipeIngredient->id_ingredient)->first();
            $ingredients = array_add($ingredients, $counter, $ingredient->name);
            $counter++;
        }
        return $ingredients;
    }
}
