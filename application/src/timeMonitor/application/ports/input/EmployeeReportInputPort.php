<?php

namespace timeMonitor\application\ports\input;

use timeMonitor\application\ports\output\EmployeeReportOutoutPort;
use timeMonitor\domain\model\TimeRecord;
use timeMonitor\application\usecase\EmployeeReport;
use timeMonitor\application\usecase\EmployeeReportUseCase;
use timeMonitor\domain\model\Employee;

class EmployeeReportInputPort implements EmployeeReportUseCase
{

    private EmployeeReportOutoutPort $employeeReportOutputPort;

    public function __construct(EmployeeReportOutoutPort $employeeReportOutputPort)
    {
        $this->employeeReportOutputPort = $employeeReportOutputPort;
    }

    function getTimeRecordsByEmployee(Employee $employee): array
    {
        return $this->employeeReportOutputPort->getTimeRecordsByEmployee($employee);
    }
}
