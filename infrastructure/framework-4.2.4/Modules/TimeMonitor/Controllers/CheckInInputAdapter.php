<?php

namespace Modules\TimeMonitor\Controllers;

use App\Controllers\BaseController;
use Modules\TimeMonitor\Models\TimeMonitorRepository;
use Modules\TimeMonitor\Adapters\Output\TimeMonitorOutputAdapter;
use timeMonitor\application\ports\input\CheckInInputPort;
use timeMonitor\application\usecase\CheckInUseCase;

class CheckInInputAdapter extends BaseController
{

    private CheckInUseCase $checkInUseCase;

    public function __construct()
    {
        $timeMonitorPutputPort = new TimeMonitorOutputAdapter(new TimeMonitorRepository());
        $this->checkInUseCase = new CheckInInputPort($timeMonitorPutputPort);
    }

    public function index()
    {
        return view("Modules\TimeMonitor\Views\index");
    }

    public function checkIn()
    {
        return view("Modules\TimeMonitor\Views\index");
    }
}
