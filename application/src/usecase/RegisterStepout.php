<?php

namespace timeMonitor\application\usecase;

use domain\model\TimeRecord;

interface RegisterStepOut
{
    public function execute(TimeRecord $timeRecord): array;
}
