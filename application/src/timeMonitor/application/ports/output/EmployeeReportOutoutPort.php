<?php
namespace timeMonitor\application\ports\output;

use timeMonitor\domain\model\Employee;

interface EmployeeReportOutoutPort{

    public function getTimeRecordsByEmployee(Employee $employee):array;
}