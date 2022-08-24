<?php

namespace timeMonitor\application\ports\input;

use timeMonitor\application\ports\output\EmployeeReportOutoutPort;
use timeMonitor\application\usecase\EmployeeReportUseCase;

class EmployeeReportInputPort implements EmployeeReportUseCase
{

    private EmployeeReportOutoutPort $employeeReportOutputPort;

    public function __construct(EmployeeReportOutoutPort $employeeReportOutputPort)
    {
        $this->employeeReportOutputPort = $employeeReportOutputPort;
    }

    function getTimeRecordsByEmployee(int $employeeId): array
    {
        return $this->employeeReportOutputPort->getTimeRecordsByEmployee($employeeId);
    }
}
