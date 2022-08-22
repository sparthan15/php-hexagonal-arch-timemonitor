<?php

use Modules\TimeMonitor\Models\EmployeeReportRepository;
use timeMonitor\application\ports\input\EmployeeReportInputPort;
use timeMonitor\application\ports\output\EmployeeReportOutoutPort;

class EmployeeReportOutputAdapter extends EmployeeReportInputPort{

    public function __construct(EmployeeReportOutoutPort $employeeReportOutoutPort)
    {
        
    }
}