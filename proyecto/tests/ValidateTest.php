<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
    public function testEmail()
    {
        $email=Validate::email('a@ex.com');
        $this->assertTrue($email);

        $email=Validate::email('a@@ex.com');
        $this->assertFalse($email);
    }

    public function testUrl()
    {
        $url=Validate::url('https://platzi.com');
        $this->assertTrue($url);

        $url=Validate::url('platzi.com');
        $this->assertFalse($url);
    }

    public function testPassword()
    {
        $password=Validate::password('123456aZ@');
        $this->assertTrue($password);

        $password=Validate::password('123456aA*');
        $this->assertFalse($password);
    }
}