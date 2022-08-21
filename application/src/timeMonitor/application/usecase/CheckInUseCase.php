<?php

namespace timeMonitor\application\usecase;

use timeMonitor\domain\model\TimeRecord;

interface CheckInUseCase
{
    public function execute(TimeRecord $timeRecord): TimeRecord;
}
