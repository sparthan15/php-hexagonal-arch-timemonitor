<?php

namespace timeMonitor\application\usecase;

use domain\model\TimeRecord;

interface EmployeeReport
{
    function execute(TimeRecord $timeRecord): array;
}
