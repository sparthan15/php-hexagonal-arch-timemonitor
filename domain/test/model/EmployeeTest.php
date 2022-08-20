<?php

use domain\model\Employee;
use domain\test\util\TestUtilities;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{

    private Employee $employee;

    public function setUp(): void
    {
        $this->employee = TestUtilities::buildMaleEmployee();
    }

    public function testUserProperties(): void
    {
        $this->assertNotNull($this->employee->getUser());
        $this->assertNotNull($this->employee->getName());
        $this->assertNotNull($this->employee->getLastName());
        $this->assertEquals(37, $this->employee->getAge());
        $this->assertNotNull(37, $this->employee->getId());
    }

    public function testUserIsMale(): void
    {
        $this->assertTrue($this->employee->isMale());
    }

    public function testUserIsFemale(): void
    {
        $employeeTest = TestUtilities::buildFemaleEmployee();
        $this->assertFalse($employeeTest->isMale());
    }
}
