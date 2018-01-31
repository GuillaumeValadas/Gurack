<?php
namespace Gurack\Guru;

class GuruAPI {

	protected $guru;

	protected $credentials;

	public function __construct()
	{
		$this->credentials = $this->setCredentials();
		//	$this->guru = $this->connect();
	}

	private function setCredentials()
	{
		$config = json_decode(file_get_contents('config.json'));

		return [
			'clientId' => $config['auth']['guru']['clientId'],
			'clientSecret' => $config['auth']['guru']['clientSecret']
			];
	}

	public function getCredentials()
	{
		return $this->credentials;
	}
}
