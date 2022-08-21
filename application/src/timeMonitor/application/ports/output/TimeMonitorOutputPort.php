<?php

namespace timeMonitor\application\ports\output;

use timeMonitor\domain\model\TimeRecord;

interface TimeMonitorOutputPort
{
    function checkIn(TimeRecord $timeRecord);
    function checkOut(TimeRecord $timeRecord);
}
