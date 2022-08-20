<?php

use PHPUnit\Framework\TestCase;
use timeMonitor\application\ports\input\EmployeeReportInputPort;
use timeMonitor\domain\test\util\TestUtilities;

class EmployeeReportTest extends TestCase
{

    private $employee;
    
    public function setUp(): void
    {
        $this->employee = TestUtilities::buildMaleEmployee();
    }

    public function test()
    {
        $employeeReport = new EmployeeReportInputPort();
        $entryDateTime = new DateTime();
        $this->assertNotNull($employeeReport->execute(TestUtilities::buildTimeRecord($this->employee, $entryDateTime)));
    }
}
