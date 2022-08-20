<?php

namespace timeMonitor\application\ports\input;

use domain\model\TimeRecord;
use timeMonitor\application\usecase\EmployeeReport;

class EmployeeReportInputPort implements EmployeeReport
{

    function execute(TimeRecord $timeRecord): array
    {
        return [];
    }
}
