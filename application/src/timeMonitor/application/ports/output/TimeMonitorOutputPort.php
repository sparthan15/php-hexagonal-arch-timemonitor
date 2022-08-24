<?php

namespace timeMonitor\application\ports\output;

use timeMonitor\domain\model\TimeRecord;

interface TimeMonitorOutputPort
{
    function checkIn(TimeRecord $timeRecord): TimeRecord;
    function checkOut(TimeRecord $timeRecord): bool;
    function getActiveCheckIn(int $employeeId);
}
