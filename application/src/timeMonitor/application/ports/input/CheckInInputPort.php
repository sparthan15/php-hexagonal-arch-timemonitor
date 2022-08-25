<?php

namespace timeMonitor\application\ports\input;

use timeMonitor\application\ports\output\TimeMonitorOutputPort;
use timeMonitor\application\usecase\CheckInUseCase;
use timeMonitor\domain\model\TimeRecord;
use timeMonitor\domain\specification\CheckInSpecification;

class CheckInInputPort implements CheckInUseCase {

    private $timeMonitorOutputPort;

    function __construct(TimeMonitorOutputPort $timeMonitorOutputPort) {
        $this->timeMonitorOutputPort = $timeMonitorOutputPort;
    }

    public function execute(TimeRecord $timeRecord): TimeRecord {
        $checkInValidation = new CheckInSpecification($this->timeMonitorOutputPort->getActiveCheckIn($timeRecord->getEmployeeId()));
        $checkInValidation->validate();
        return $this->timeMonitorOutputPort->checkIn($timeRecord);
    }

}
