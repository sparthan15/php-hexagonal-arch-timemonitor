<?php

use Modules\TimeMonitor\Controllers\HomeController;
use PHPUnit\Framework\TestCase;
use timeMonitor\application\ports\input\EmployeeReportInputPort;
use timeMonitor\application\usecase\EmployeeReportUseCase;

class HomeControllerTest extends TestCase
{

    public function test()
    {
        $employeeUseCase = $this->createMock(EmployeeReportUseCase::class);
        $employeeUseCase->expects($this->once())
            ->method("getTimeRecordsByEmployee")
            ->with(1)
            ->willReturn([]);
        $controller = new HomeController($employeeUseCase);
        $this->assertNotNull($controller);
        $controller->index();
    }
}
