<?php

namespace timeMonitor\application\usecase;

use timeMonitor\domain\model\TimeRecord;

interface CheckOutUseCase
{
    public function execute(TimeRecord $timeRecord): bool;
}
