<?php

namespace timeMonitor\application\ports\output;

interface EmployeeReportOutoutPort
{
    public function getTimeRecordsByEmployee(int $employeeId): array;
}
