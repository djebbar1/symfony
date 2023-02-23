<?php
namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase {

    public function testIsTrue() {
        $user = new User();

        $user->setEmail('test1@gmail.com')
             ->setPassword('test');

        $this->assertTrue($user->getEmail() === 'test1@gmail.com');
        $this->assertTrue($user->getPassword() === 'test');
    }
    public function testIsFalse() {
        $user = new User();

        $user->setEmail('test1@gmail.com')
             ->setPassword('test');

        $this->assertFalse($user->getEmail() === 'false@gmail.com');
        $this->assertFalse($user->getPassword() === 'false');
    }
}