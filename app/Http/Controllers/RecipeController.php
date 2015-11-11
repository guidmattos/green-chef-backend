<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use App\Recipe;
use Input;

class RecipeController extends Controller
{
    /**
     * Send a push notificatino to patient.
     *
     * @return Response
     */

    public function listRecipes()
    {
        $recipesArray = Recipe::all();
        $resposeJson = ['recipes' => $recipesArray];
        return Response::json($resposeJson, 200);
    }
}