<?php

namespace timeMonitor\domain\model;

use DateTime;
use DateTimeZone;

class TimeRecord
{

    private ?string $id;
    private Employee $employee;
    private DateTime $checkInDateTime;
    private ?DateTime $checkOutDateTime;


    function __construct(Employee $employee, string $id,  DateTime $inDateTime)
    {
        $this->id = $id;
        $this->employee = $employee;
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

    public function getEmployee(): Employee
    {
        return $this->employee;
    }
}
