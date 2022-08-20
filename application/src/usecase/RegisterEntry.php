<?php

namespace timeMonitor\application\usecase;

use domain\model\TimeRecord;

interface RegisterEntry
{
    public function execute(TimeRecord $timeRecord): TimeRecord;
}
