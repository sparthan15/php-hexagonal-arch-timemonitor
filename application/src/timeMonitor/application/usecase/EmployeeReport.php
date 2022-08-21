<?php

namespace timeMonitor\application\usecase;

use timeMonitor\domain\model\TimeRecord;

interface EmployeeReport
{
    function execute(TimeRecord $timeRecord): array;
}
