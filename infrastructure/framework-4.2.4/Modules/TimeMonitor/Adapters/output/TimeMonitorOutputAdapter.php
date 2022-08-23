<?php

namespace Modules\TimeMonitor\Adapters\Output;

use Modules\TimeMonitor\Models\TimeMonitorRepository;
use timeMonitor\application\ports\output\TimeMonitorOutputPort;
use timeMonitor\domain\model\TimeRecord;

class TimeMonitorOutputAdapter extends TimeMonitorOutputPort
{

    private $timeMonitorModel;

    public function __construct(TimeMonitorRepository $timeMonitorModel)
    {
        $this->timeMonitorModel = $timeMonitorModel;
    }

    public function checkIn(TimeRecord $timeRecord): TimeRecord
    {
        $data["employee_id"] = $timeRecord->getEmployeeId();
        $data["checkin_datetime"] = $timeRecord->getCheckInDateTime()->format('Y-m-d H:i:s');
        $data["status"] = "ACTIVE"; var_dump($data );
        $insertedId =  $this->timeMonitorModel->insert($data, true);

        return new TimeRecord($timeRecord->getEmployeeId(), $insertedId, $timeRecord->getCheckInDateTime());
    }

    public function checkOut(TimeRecord $timeRecord): bool
    {
        return $this->timeMonitorModel->update($timeRecord);
    }
}
