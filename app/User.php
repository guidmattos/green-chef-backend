<?php

namespace App;

use Config;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use JWT;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function generateJWT()
    {
        $infoArr = [
            "iss" 	 => Config::get('app.url'), //iss: the issuer
            "aud" 	 => $this->id, //aud: the audience
            "iat" 	 => time(), //iat: the issued at timestamp
            "exp" 	 => time() + Config::get('app.expirationTime'), //exp: expiration time
        ];

        $jwt = JWT::encode($infoArr, Config::get('app.secretKey'));

        return $jwt;
    }

}
