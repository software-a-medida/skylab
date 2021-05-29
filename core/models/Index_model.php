<?php

defined('_EXEC') or die;

class Index_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function create_appointment($data)
	{
		$query = $this->database->insert('system_appointments', [
			'token' => $data['token'],
			'test' => $data['test'],
			'paxs' => $data['paxs'],
			'place' => $data['place'],
			'zone' => $data['zone'],
			'hotel' => $data['hotel'],
			'date' => $data['date'],
			'hour' => $data['hour'],
			'name' => $data['name'],
			'email' => $data['email'],
			'phone' => $data['phone']
		]);

		return $query;
	}
}
