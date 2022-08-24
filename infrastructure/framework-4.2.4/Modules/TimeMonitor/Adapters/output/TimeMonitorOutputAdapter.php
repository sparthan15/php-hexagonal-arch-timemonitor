<?php

namespace Modules\TimeMonitor\Adapters\Output;

use DateTime;
use Modules\TimeMonitor\Models\TimeMonitorRepository;
use timeMonitor\application\ports\output\TimeMonitorOutputPort;
use timeMonitor\domain\model\TimeRecord;
use timeMonitor\domain\vo\CheckInStatus;

class TimeMonitorOutputAdapter implements TimeMonitorOutputPort
{

    private $timeMonitorModel;

    public function __construct(TimeMonitorRepository $timeMonitorModel)
    {
        $this->timeMonitorModel = $timeMonitorModel;
    }

    public function checkIn(TimeRecord $timeRecord): TimeRecord
    {
        $data["employee_id"] = $timeRecord->getEmployeeId();
        $data["checkin_datetime"] = $timeRecord->getCheckInDateTimeFormatted();
        $data["status"] = "ACTIVE";
        $insertedId =  $this->timeMonitorModel->insert($data, true);

        return new TimeRecord($timeRecord->getEmployeeId(), $insertedId, $timeRecord->getCheckInDateTime());
    }

    public function checkOut(TimeRecord $timeRecord): bool
    {
        return $this->timeMonitorModel->update($timeRecord);
    }

    public function getActiveCheckIn(int $employeeId): array
    {
        $result = $this->timeMonitorModel->getWhere(['employee_id' => $employeeId, 'status' => CheckInStatus::ACTIVE])->getResultArray();
        $list = [];
        foreach($result as $timeRecord){
            $list[] = new TimeRecord($employeeId, $timeRecord['time_monitor_id'], DateTime::createFromFormat('Y-m-d H:i:s',$timeRecord['checkin_datetime']));
        }
      
        return $list;
    }
}
