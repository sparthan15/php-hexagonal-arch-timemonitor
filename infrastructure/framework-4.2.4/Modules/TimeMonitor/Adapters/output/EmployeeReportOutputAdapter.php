<?php

namespace Modules\TimeMonitor\Adapters\Output;

use timeMonitor\application\ports\output\EmployeeReportOutoutPort;

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
