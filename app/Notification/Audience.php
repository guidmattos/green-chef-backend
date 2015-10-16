<?php

namespace App\Notification;

use App\User;

class Audience 
{
	public function getAudience($where, $id)
	{
		$audience = User::where('id', $where, $id)->where('device_token', '!=', '')->get();
		$audience = $this->prepareAudience($audience);
		return $audience;
	}

	private function prepareAudience($objects)
	{
		$audience = array();
		foreach ($objects as $key => $object) {
			switch ($object->platform) {
				case 'iOS':
					$audience['OR'][]['device_token'][] = $object->device_token;
					break;
				default:
					$audience['OR'][]['apid'][] = $object->device_token;
					break;
			}			
		}
		return $audience;
	} 
}