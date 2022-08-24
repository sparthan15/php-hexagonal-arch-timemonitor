<?php

namespace timeMonitor\domain\specification;

use timeMonitor\domain\exception\ActiveCheckInException;

class CheckInSpecification
{


    private array $timeRecords;

    public function __construct(array $timeRecords)
    {
        $this->timeRecords = $timeRecords;
    }

    public function validate(): bool
    {
        $result = true;
        foreach ($this->timeRecords as $current) {
            if ($current->getStatus()->isActive()) {
                throw new ActiveCheckInException("Se encontro un registro sin finalizar");
            }
        }
        return $result;
    }
}
