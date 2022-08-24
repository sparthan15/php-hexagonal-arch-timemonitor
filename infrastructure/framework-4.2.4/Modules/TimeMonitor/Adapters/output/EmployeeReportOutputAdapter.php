<?php

namespace Modules\TimeMonitor\Adapters\Output;

use CodeIgniter\Model;
use timeMonitor\application\ports\output\EmployeeReportOutoutPort;

class EmployeeReportOutputAdapter implements EmployeeReportOutoutPort
{

    private  Model $employeeReportOutoutPort;

    public function __construct(Model $employeeReportOutoutPort)
    {
        $this->employeeReportOutoutPort = $employeeReportOutoutPort;
    }

    public function getTimeRecordsByEmployee(int $employeeId): array
    {
        return $this->employeeReportOutoutPort->getTimeRecordsByEmployee($employeeId);
    }
}
