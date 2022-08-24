<?php

namespace timeMonitor\domain\vo;

class CheckInStatus
{
    const ACTIVE = "ACTIVE";

    const CHECKED_OUT = "CHECKED OUT";

    private $name;

    public function __construct(string $status)
    {
        $this->name = $status;
    }

    public function isActive()
    {
        echo $this->name;
        return $this->name == CheckInStatus::ACTIVE;
    }
}
