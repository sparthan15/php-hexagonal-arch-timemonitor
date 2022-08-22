<?php

namespace Modules\TimeMonitor\Controllers;

use App\Controllers\BaseController;
use Modules\TimeMonitor\Models\TimeMonitorModel;
use Modules\TimeMonitor\Ports\Output\TimeMonitorOutputAdapter;
use timeMonitor\application\ports\input\CheckInInputPort;

class CheckInController extends BaseController
{

    private $checkInUseCase;

    public function __construct()
    {
        $timeMonitorPutputPort = new TimeMonitorOutputAdapter(new TimeMonitorModel());
        $this->checkInUseCase = new CheckInInputPort($timeMonitorPutputPort);
    }

    public function index()
    {
        return view("Modules\TimeMonitor\Views\index");
    }
}
