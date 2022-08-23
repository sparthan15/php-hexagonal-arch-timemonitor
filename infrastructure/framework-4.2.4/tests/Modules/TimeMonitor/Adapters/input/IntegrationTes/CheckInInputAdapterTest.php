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

    public function testIndex()
    {
        $result = $this->withUri("")
            ->controller(CheckInInputAdapter::class)

            ->execute('index');

        $this->assertTrue($result->isOK());
    }

    public function testCheckIn()
    {
        $result = $this->withUri("")
            ->controller(CheckInInputAdapter::class)
            ->execute('checkIn');
        $this->assertTrue($result->isOK());
    }
}
