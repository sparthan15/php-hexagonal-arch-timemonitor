<?php
use PHPUnit\Framework\TestCase; 

use tests\util\TestUtilities;
use timeMonitor\application\ports\output\TimeMonitorOutputPort;
use timeMonitor\domain\model\TimeRecord;
use timeMonitor\application\ports\input\CheckOutInputPort;

class CheckOutInputPortTest extends TestCase
{

    private $checkOutInputPort;

    private $timeMonitorOutoutPort;

    public function setUp(): void
    {
        $this->timeMonitorOutoutPort = $this->createStub(TimeMonitorOutputPort::class);
    }

    public function testCheckOutEmployeeUseCase()
    {
        $employee = TestUtilities::buildFemaleEmployee();
        $employeeCheckIn = TestUtilities::buildTimeRecord($employee, new DateTime());
        $employeeCheckOut = new TimeRecord($employee, "123", $employeeCheckIn->getCheckInDateTime());
        $this->timeMonitorOutoutPort->method("checkOut")->willReturn($employeeCheckOut);
        $this->timeMonitorOutoutPort->expects($this->exactly(1))
            ->method("checkOut")
            ->with($employeeCheckOut);
        $this->checkOutInputPort = new CheckOutInputPort($this->timeMonitorOutoutPort);
        $employeeCheckOutUpdated = $this->checkOutInputPort->execute($employeeCheckOut);

        $this->assertSame("123", $employeeCheckOutUpdated->getId());
    }
}
