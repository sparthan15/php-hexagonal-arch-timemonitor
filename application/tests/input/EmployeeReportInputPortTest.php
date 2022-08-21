<?php

use tests\util\TestUtilities;
use timeMonitor\application\ports\input\EmployeeReportInputPort;
use PHPUnit\Framework\TestCase; 

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
