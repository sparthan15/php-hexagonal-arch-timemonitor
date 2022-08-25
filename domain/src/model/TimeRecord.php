<?php

namespace timeMonitor\domain\model;

use DateTime;
use timeMonitor\domain\vo\CheckInStatus;

class TimeRecord
{

    private ?string $id;
    private int $employeeId;
    private DateTime $checkInDateTime;
    private ?DateTime $checkOutDateTime;
    private CheckInStatus $status;


    function __construct(int $employeeId, string $id,  DateTime $inDateTime)
    {
        $this->id = $id;
        $this->employeeId = $employeeId;
        $this->checkInDateTime = $inDateTime;
        $this->checkOutDateTime = null;
        $this->status = new CheckInStatus(CheckInStatus::ACTIVE);
    }


    public function getId(): string
    {
        return $this->id;
    }

    public function setId($id): TimeRecord
    {
        $this->id = $id;
        return $this;
    }

    public function getCheckOutDateTime(): DateTime
    {
        return $this->checkOutDateTime;
    }

    public function setCheckOutDateTime(DateTime $checkOutDateTime): TimeRecord
    {
        $this->checkOutDateTime = $checkOutDateTime;
        return $this;
    }

    public function getCheckInDateTime(): DateTime
    {
        return $this->checkInDateTime;
    }

    public function getCheckInDateTimeFormatted(): string
    {
        return $this->checkInDateTime->format('Y-m-d H:i:s');
    }

    public function getCheckInDateFormatted(): string
    {
        return $this->checkInDateTime->format('Y-m-d');
    }

    public function getCheckInTimeFormatted(): string
    {
        return $this->checkInDateTime->format('H:i:s');
    }

    public function getEmployeeId(): int
    {
        return $this->employeeId;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatusToCheckedOut()
    {
        $this->status = new CheckInStatus(CheckInStatus::CHECKED_OUT);
        return $this;
    }
}
