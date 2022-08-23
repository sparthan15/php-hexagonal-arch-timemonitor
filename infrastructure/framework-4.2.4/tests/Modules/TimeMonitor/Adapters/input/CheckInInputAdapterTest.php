<?php

use Modules\TimeMonitor\Controllers\CheckInInputAdapter;
use PHPUnit\Framework\TestCase;
use tests\util\TestUtilities;
use timeMonitor\application\ports\input\CheckInInputPort;

class CheckInInputAdapterTest extends TestCase{

    public function testCheckInWithEmployeeId(){
        $adapter = new CheckInInputAdapter(\Config\Services::request());
        $checkIn = TestUtilities::buildTimeRecord(1, new DateTime());
        $checkInUseCase = $this->createMock(CheckInInputPort::class);
        $checkInUseCase->expects($this->once())
        ->method("execute")
        ->willReturn($checkIn);
        $result = $adapter->checkIn();
        $this->assertNotNull($result);
    }
}