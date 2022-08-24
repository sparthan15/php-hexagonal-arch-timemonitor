<?php

namespace CodeIgniter;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;
use Modules\TimeMonitor\Controllers\CheckInInputAdapter;

class CheckInInputAdapterTest extends CIUnitTestCase
{
    use ControllerTestTrait;
    use DatabaseTestTrait;


    public function testCheckIn()
    {
        $result = $this->withUri("")
            ->controller(CheckInInputAdapter::class)
            ->execute('checkIn');
        $this->assertTrue($result->isOK());
    }
}
