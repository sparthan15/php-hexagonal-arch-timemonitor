<?php

use timeMonitor\domain\model\User;
use PHPUnit\Framework\TestCase;
use timeMonitor\domain\test\util\TestUtilities;

class UserTest extends TestCase
{

    private User $user;

    public function setUp(): void
    {
        $this->user = TestUtilities::buildUser();
    }

    public function testUserProperties(): void
    {
        $this->assertEmpty($this->user->getId());
        $this->assertNotNull($this->user->getUserName());
        $this->assertNotNull($this->user->getPassword());
        $this->assertNotNull($this->user->getUpdatedAt());
        $this->assertNotNull($this->user->getCreatedAt());
    }


    public function testUserIsActive()
    {
        $dateTime = new DateTime();
        $userTest = new User("", "cgamboa15", "123456", true, $dateTime, $dateTime);
        $this->assertTrue($userTest->isActive());
    }

    public function testUserIsNotActive()
    {
        $dateTime = new DateTime();
        $user = new User("", "cgamboa15", "123456", false, $dateTime, $dateTime);
        $this->assertFalse($user->isActive());
    }
}
