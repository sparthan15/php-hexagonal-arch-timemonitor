<?php

use Modules\TimeMonitor\Adapters\Output\EmployeeReportOutputAdapter;
use Modules\TimeMonitor\Models\EmployeeReportRepository;
use PHPUnit\Framework\TestCase;
use timeMonitor\domain\model\Employee;

class EmployeeReportOutputAdapterTest extends TestCase
{

    private $adapter;

    private $model;

    public function testGetTimeRecordsByEmployee()
    {
        $this->model = $this->createMock(EmployeeReportRepository::class);
        $this->model->expects($this->once())
            ->method("getTimeRecordsByEmployee")
            ->with(1)
            ->willReturn([]);
        $this->adapter = new EmployeeReportOutputAdapter($this->model);
        $result = $this->adapter->getTimeRecordsByEmployee(1);
        $this->assertNotNull($result);
    }
}
