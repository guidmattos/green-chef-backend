<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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
    protected $fillable = ['name', 'unit_value', 'image'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function ingredients() {
        return $this->hasMany('Ingredient');
    }

}
