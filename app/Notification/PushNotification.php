<?php

// 
// Author: Alex Lima
// Documentation: https://github.com/urbanairship/php-library2/blob/master/docs/push.rst
// 

namespace App\Notification;

use UrbanAirship\Airship;
use UrbanAirship\Push as P;

class PushNotification 
{
	private $appKey;
	private $masterSecret;
	
	public function __construct()
	{
		if(env('APP_ENV') == 'production'){
			// Production Integration
			$this->appKey = "F9Zq4KaHROuc9GUtNdYueg";
			$this->masterSecret = "uoySs6f_RrSu3Ezo6C4iIA";
		}else{
			// Development Integration
			$this->appKey = "epluOSSYQU6xIzq7SCwZPA";
			$this->masterSecret = "86GYs32qRJ6oz1Wbrrbtfw";
		}
	}
	
	public function send($message, $audience)
	{
		$airship = new Airship($this->appKey, $this->masterSecret);
		try {
		    $response = $airship->push()
		        ->setAudience($audience)
		        ->setNotification(P\notification($message, array("ios" => P\ios($message, "+1", "default"))))
		        ->setDeviceTypes(P\all)
		        ->send();
		} catch (AirshipException $e) {
		    print_r($e);
		}
	}
}