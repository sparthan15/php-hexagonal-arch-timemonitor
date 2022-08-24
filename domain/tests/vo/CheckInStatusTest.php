<?php

use PHPUnit\Framework\TestCase;
use timeMonitor\domain\vo\CheckInStatus;

class CheckInStatusTest extends TestCase
{

    public function testCheckInStatusTrue()
    {
        $status = new CheckInStatus(CheckInStatus::ACTIVE);
        $this->assertTrue($status->isActive());
    }

    public function testCheckInStatusFalse()
    {
        $status = new CheckInStatus(CheckInStatus::CHECKED_OUT);
        $this->assertFalse($status->isActive());
    }
}
