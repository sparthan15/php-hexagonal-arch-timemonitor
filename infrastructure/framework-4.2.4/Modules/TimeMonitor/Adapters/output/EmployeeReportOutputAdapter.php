<?php

namespace Modules\TimeMonitor\Adapters\Output;

use timeMonitor\application\ports\input\EmployeeReportInputPort;
use timeMonitor\application\ports\output\EmployeeReportOutoutPort;
use timeMonitor\domain\model\Employee;

class EmployeeReportOutputAdapter implements EmployeeReportOutoutPort
{

    private  $employeeReportOutoutPort;

    public function __construct($employeeReportOutoutPort)
    {
        $this->employeeReportOutoutPort = $employeeReportOutoutPort;
    }

    public function getTimeRecordsByEmployee(int $employeeId): array
    {
        return [];
    }
}
