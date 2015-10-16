<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\User;
use Illuminate\Http\Request;
use App\Notification\PushNotification;
use App\Notification\Audience;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use Input;

class PatientsController extends Controller
{
    /**
     * Send a push notificatino to patient.
     *
     * @return Response
     */


    public function push()
    {
        $message = Input::get('message');
        $id = Input::get('id');
        $audience = new Audience();
        $audience = $audience->getAudience('=', $id);
        if ($audience == null) {
            return Response::json('USER_NOT_FOUND', 400);
        }
        try{
            $notification = new PushNotification();
            $notification->send($message, $audience);
            return Response::json('OK', 200);
        } catch (Exception $e) {
            return Response::json('ERROR', 404);
        }
    }
}