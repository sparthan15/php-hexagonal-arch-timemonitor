<?php

namespace Modules\TimeMonitor\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use DateTime;
use Modules\TimeMonitor\Models\TimeMonitorRepository;
use Modules\TimeMonitor\Adapters\Output\TimeMonitorOutputAdapter;
use timeMonitor\application\ports\input\CheckInInputPort;
use timeMonitor\application\usecase\CheckInUseCase;
use timeMonitor\domain\model\TimeRecord;

class CheckInInputAdapter extends BaseController
{

    private CheckInUseCase $checkInUseCase;

    public function __construct()
    {
        //$this->request = $request;
        $timeMonitorPutputPort = new TimeMonitorOutputAdapter(new TimeMonitorRepository());
        $this->checkInUseCase = new CheckInInputPort($timeMonitorPutputPort);
    }

    public function index()
    {
        return view("Modules\TimeMonitor\Views\index");
    }

    public function checkIn()
    {
        $employeeId = 1;
        $checkIn = new TimeRecord($employeeId, "", new DateTime());
        $this->checkInUseCase->execute($checkIn);
        return view("Modules\TimeMonitor\Views\index");
    }

    public function otherMethod()
	{
		echo "This is other method from Student Module";
	}
}
