<?php

namespace Modules\TimeMonitor\Adapters\Output;

use CodeIgniter\Model;
use DateTime;
use Modules\TimeMonitor\Models\TimeMonitorRepository;
use timeMonitor\application\ports\output\TimeMonitorOutputPort;
use timeMonitor\domain\model\TimeRecord;
use timeMonitor\domain\vo\CheckInStatus;

class TimeMonitorOutputAdapter implements TimeMonitorOutputPort
{

    private Model $timeMonitorModel;

    public function __construct(Model $timeMonitorModel)
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
        return $this->timeMonitorModel->getActiveCheckIn($employeeId);
    }
}
