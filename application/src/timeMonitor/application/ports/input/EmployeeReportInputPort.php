<?php

namespace timeMonitor\application\ports\input;

use timeMonitor\domain\model\TimeRecord;
use timeMonitor\application\usecase\EmployeeReport;

class EmployeeReportInputPort implements EmployeeReport
{

    function execute(TimeRecord $timeRecord): array
    {
        return [];
    }
}
