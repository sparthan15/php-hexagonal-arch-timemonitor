<?php

namespace timeMonitor\domain\model;

use DateTime;
use DateTimeZone;

class TimeRecord
{

    private ?string $id;
    private int $employee;
    private DateTime $checkInDateTime;
    private ?DateTime $checkOutDateTime;


    function __construct(int $employeeId, string $id,  DateTime $inDateTime)
    {
        $this->id = $id;
        $this->employee = $employeeId;
        $this->checkInDateTime = $inDateTime;
        $this->checkOutDateTime = null;
    }


    public function getId():string
    {
        return $this->id;
    }

    public function setId($id):TimeRecord
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

    public function getEmployeeId(): int
    {
        return $this->employee;
    }
}
