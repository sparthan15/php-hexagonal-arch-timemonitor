<?php

namespace timeMonitor\application\usecase;

use timeMonitor\domain\model\TimeRecord;

interface RegisterStepOut
{
    public function execute(TimeRecord $timeRecord): array;
}
