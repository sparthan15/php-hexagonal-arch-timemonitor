<?php

namespace Modules\TimeMonitor\Adapters\Dtos;

class IndexPresenter
{

    public array $activeCheckIn;
    public string $errorMessage;

    public function __construct()
    {
        $this->activeCheckIn = [];
        $this->errorMessage = "";
    }
}
