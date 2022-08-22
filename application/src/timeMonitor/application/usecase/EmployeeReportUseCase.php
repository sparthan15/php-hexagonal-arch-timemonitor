<?php

namespace timeMonitor\application\usecase;

use timeMonitor\domain\model\Employee;
use timeMonitor\domain\model\TimeRecord;

interface EmployeeReportUseCase
{
    function getTimeRecordsByEmployee(int $employeeId): array;
}
