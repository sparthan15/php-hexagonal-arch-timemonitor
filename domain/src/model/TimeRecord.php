<?php

namespace domain\model;

use DateTime;
use DateTimeZone;

class TimeRecord
{

    private ?string $id;
    private Employee $employee;
    private DateTime $inDateTime;
    private ?DateTime $outDateTime;


    function __construct(Employee $employee, string $id,  DateTime $inDateTime)
    {
        $this->id = $id;
        $this->employee = $employee;
        $this->inDateTime = $inDateTime;
        $this->outDateTime = null;
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

    public function getOutDateTime(): DateTime
    {
        return $this->outDateTime;
    }

    public function setOutDateTime($outDateTime): TimeRecord
    {
        $this->outDateTime = $outDateTime;
        return $this;
    }

    public function getInDateTime(): DateTime
    {
        return $this->inDateTime;
    }


    public function setInDateTime($inDateTime): TimeRecord
    {
        $this->inDateTime = $inDateTime;
        return $this;
    }

    public function getEmployee(): Employee
    {
        return $this->employee;
    }
}
