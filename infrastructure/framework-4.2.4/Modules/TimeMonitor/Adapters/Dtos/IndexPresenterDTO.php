<?php

namespace Modules\TimeMonitor\Adapters\Dtos;

class IndexPresenterDTO
{

    public array $activeCheckIn;
    public string $errorMessage;

    public function __construct()
    {
        $this->activeCheckIn = [];
        $this->errorMessage = "";
    }
    
    public function showCheckInButton():bool{
        return count($this->activeCheckIn)>0;
    }
}
