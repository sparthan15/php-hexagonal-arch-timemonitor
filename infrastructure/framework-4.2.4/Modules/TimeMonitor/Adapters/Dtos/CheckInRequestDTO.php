<?php

namespace Modules\TimeMonitor\Adapters\Dtos;

use DateTime;

class CheckInRequestDTO
{

    private int $employeeId;
    private DateTime $checkInDateTime;

    public function __construct(int $employee_id, DateTime $checkin_datetime)
    {
        $this->employeeId = $employee_id;
        $this->checkInDateTime = $checkin_datetime;
    }

    public function getEmployeeId(): int
    {
        return $this->employeeId;
    }

    public function getCheckInDatetime(): Datetime
    {
        return $this->checkInDateTime;
    }
}
