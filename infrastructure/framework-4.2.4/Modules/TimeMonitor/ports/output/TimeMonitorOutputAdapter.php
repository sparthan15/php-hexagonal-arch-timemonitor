<?php

namespace Modules\TimeMonitor\Ports\Output;

use Modules\TimeMonitor\Models\TimeMonitorModel;
use timeMonitor\application\ports\output\TimeMonitorOutputPort;
use timeMonitor\domain\model\TimeRecord;

class TimeMonitorOutputAdapter extends TimeMonitorOutputPort
{

    private $timeMonitorModel;

    public function __construct(TimeMonitorModel $timeMonitorModel)
    {
        $this->timeMonitorModel = $timeMonitorModel;
    }

    public function checkIn(TimeRecord $timeRecord): TimeRecord
    {
        return $this->timeMonitorModel->insert($timeRecord);
    }

    public function checkOut(TimeRecord $timeRecord): bool
    {
        return $this->timeMonitorModel->update($timeRecord);
    }
}
