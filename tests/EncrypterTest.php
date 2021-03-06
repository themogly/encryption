<?php

use Illuminate\Encrypter;

class EncrypterTest extends PHPUnit_Framework_TestCase {

	public function testEncryption()
	{
		$e = $this->getEncrypter();
		$this->assertFalse('foo' == $e->encrypt('foo'));
		$encrypted = $e->encrypt('foo');
		$this->assertTrue('foo' == $e->decrypt($encrypted));
	}


	protected function getEncrypter()
	{
		return new Encrypter('this_is_a_test_key');
	}

}