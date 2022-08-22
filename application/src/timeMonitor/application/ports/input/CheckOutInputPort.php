<?php
namespace timeMonitor\application\ports\input;

use timeMonitor\application\ports\output\TimeMonitorOutputPort;
use timeMonitor\application\usecase\CheckOutUseCase;
use timeMonitor\domain\model\TimeRecord;

class CheckOutInputPort implements CheckOutUseCase
{

    private $timeMonitorOutputPort;

    function __construct(TimeMonitorOutputPort $timeMonitorOutputPort)
    {
        $this->timeMonitorOutputPort = $timeMonitorOutputPort;
    }

    public function execute(TimeRecord $checkoutTimeMomitor):bool
    {
        return $this->timeMonitorOutputPort->checkOut($checkoutTimeMomitor);
    }
}
