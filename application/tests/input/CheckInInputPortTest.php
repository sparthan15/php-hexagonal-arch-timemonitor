<?php
use PHPUnit\Framework\TestCase;
use tests\util\TestUtilities;
use timeMonitor\application\ports\input\CheckInInputPort;
use timeMonitor\application\ports\output\TimeMonitorOutputPort;

class CheckInInputPortTest extends TestCase
{

    private $checkInInputPort;

    private $timeMonitorOutoputPort;

    protected function setUp(): void
    {
        $this->timeMonitorOutoputPort = $this->createStub(TimeMonitorOutputPort::class);
    }

    public function testRegisterCheckInUseCase()
    {
        $employee = TestUtilities::buildFemaleEmployee();
        $dateTime = new DateTime();
        $employeeCheckIn = TestUtilities::buildTimeRecord($employee, $dateTime);
        $this->timeMonitorOutoputPort->method("checkIn")->willReturn($employeeCheckIn);

        $this->checkInInputPort = new CheckInInputPort($this->timeMonitorOutoputPort);
        // once
        $this->timeMonitorOutoputPort->expects($this->exactly(1))
            ->method('checkIn')
            ->with($employeeCheckIn);
        $registerdCheckIn = $this->checkInInputPort->execute($employeeCheckIn);
        $this->assertNotNull($registerdCheckIn);
    }
}
