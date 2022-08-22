<?php

namespace Modules\TimeMonitor\Models;

use CodeIgniter\Model;
use timeMonitor\domain\model\Employee;
use timeMonitor\domain\model\TimeRecord;

class EmployeeReportRepository extends TimeMonitorRepository
{

    public function getTimeRecordsByEmployee(Employee $employee): array
    {
        return [];
    }
}
