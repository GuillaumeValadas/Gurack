<?php
use Gurack\Guru\GuruAPI;
use PHPUnit\Framework\TestCase;

class AuthenticatingTest extends TestCase{

	/** @test */
	public function it_can_set_credentials()
	{
	    $guru = new GuruAPI();

		$specimen = $guru->getCredentials();
var_dump($specimen);
		$this->assertNotEmpty($specimen);
	}

	/** @test */
	/*public function it_can_connect_to_guru_API()
	{
		//Get instance of claass
		$guru = new GuruAPI();

		//Retrieve token
		$token = $guru->getToken();
		//Assert token is ok

		//Assert a request return response
		$this->assertNotEmpty($token);
	}*/

}
