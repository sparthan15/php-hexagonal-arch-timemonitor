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
        $result = $this->withURI('/time-monitor')
            ->controller(CheckInInputAdapter::class)
            ->execute('index');

        $this->assertTrue($result->isOK());
    }

    public function testCheckIn()
    {
        $result = $this->withURI('/check-in')
            ->controller(CheckInInputAdapter::class)
            ->execute('checkIn');

        $this->assertTrue($result->isOK());
    }
}
