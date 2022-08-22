<?php

namespace timeMonitor\application\ports\output;

use timeMonitor\domain\model\TimeRecord;

abstract class TimeMonitorOutputPort
{
    abstract public function checkIn(TimeRecord $timeRecord): TimeRecord;
    abstract public function checkOut(TimeRecord $timeRecord): bool;
}
