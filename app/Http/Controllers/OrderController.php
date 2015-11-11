<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use Input;

class OrderController extends Controller
{
    /**
     * Send a push notificatino to patient.
     *
     * @return Response
     */

    public function create() 
    {
        return Response::json('OK', 200);
    }
}