<?php

use application\ports\output\TimeMonitorOutputPort;
use tests\util\TestUtilities;
use timeMonitor\application\ports\input\EmployeeReportInputPort;
use PHPUnit\Framework\TestCase;
use timeMonitor\application\ports\output\EmployeeReportOutoutPort;

class EmployeeReportInputPortTest extends TestCase
{

    private $employee;
    private $employeeReportOutputPort;

    public function setUp(): void
    {
        $this->employeeReportOutputPort = $this->createMock(EmployeeReportOutoutPort::class);
        $this->employee = TestUtilities::buildMaleEmployee();
    }

    public function test()
    {
        $this->employeeReportOutputPort->method("getTimeRecordsByemployee")
            ->with($this->employee->getId())
            ->willReturn([]);
        $employeeReport = new EmployeeReportInputPort($this->employeeReportOutputPort);

        $this->employeeReportOutputPort->expects($this->once())
        ->method("getTimeRecordsByEmployee");
        $this->assertNotNull($employeeReport->getTimeRecordsByEmployee($this->employee->getId()));
    }
}
