<?php

namespace timeMonitor\application\usecase;

use timeMonitor\domain\model\Employee;
use timeMonitor\domain\model\TimeRecord;

interface EmployeeReportUseCase
{
    function getTimeRecordsByEmployee(Employee $employee): array;
}
