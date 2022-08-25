<?php

use PHPUnit\Framework\TestCase;
use tests\util\TestUtilities;
use timeMonitor\application\ports\input\CheckInInputPort;
use timeMonitor\application\ports\output\TimeMonitorOutputPort; 
use timeMonitor\domain\exception\ActiveCheckInException;

class CheckInInputPortTest extends TestCase
{

    private $checkInInputPort;

    private $timeMonitorOutoputPort;

    protected function setUp(): void
    {
        $this->timeMonitorOutoputPort = $this->createStub(TimeMonitorOutputPort::class);
    }

    public function testCheckInUseCaseOk()
    {
        $dateTime = new DateTime();
        $employeeCheckIn = TestUtilities::buildTimeRecord(1, $dateTime);
        $this->timeMonitorOutoputPort->method("checkIn")->willReturn($employeeCheckIn);
        $this->timeMonitorOutoputPort->method("getActiveCheckIn")->willReturn([]);
        $this->checkInInputPort = new CheckInInputPort($this->timeMonitorOutoputPort);

        $this->timeMonitorOutoputPort->expects($this->exactly(1))
            ->method('checkIn')
            ->with($employeeCheckIn);
        $this->timeMonitorOutoputPort->expects($this->exactly(1))
            ->method('getActiveCheckIn')
            ->with($employeeCheckIn->getEmployeeId());
        $registerdCheckIn = $this->checkInInputPort->execute($employeeCheckIn);
        $this->assertNotNull($registerdCheckIn);
    }

    public function testCheckInUseCaseValidationFailed()
    {
        $dateTime = new DateTime();
        $employeeCheckIn = TestUtilities::buildTimeRecord(1, $dateTime);
        $this->timeMonitorOutoputPort->method("checkIn")->willReturn($employeeCheckIn);
        $this->timeMonitorOutoputPort->method("getActiveCheckIn")->willReturn([$employeeCheckIn]);
        $this->checkInInputPort = new CheckInInputPort($this->timeMonitorOutoputPort);

        $this->timeMonitorOutoputPort->expects($this->exactly(0))
            ->method('checkIn')
            ->with($employeeCheckIn);
        $this->timeMonitorOutoputPort->expects($this->exactly(1))
            ->method('getActiveCheckIn')
            ->with($employeeCheckIn->getEmployeeId());
        $this->expectException(ActiveCheckInException::class);
        $this->checkInInputPort->execute($employeeCheckIn);
    }
}
