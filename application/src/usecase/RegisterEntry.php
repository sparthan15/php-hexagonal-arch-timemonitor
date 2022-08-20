<?php

namespace timeMonitor\application\usecase;

use timeMonitor\domain\model\TimeRecord;

interface RegisterEntry
{
    public function execute(TimeRecord $timeRecord): TimeRecord;
}
