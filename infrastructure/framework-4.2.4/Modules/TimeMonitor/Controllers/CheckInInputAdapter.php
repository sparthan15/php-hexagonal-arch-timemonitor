<?php

namespace Modules\TimeMonitor\Controllers;

use App\Controllers\BaseController;
use DateTime;
use Modules\TimeMonitor\Adapters\Dtos\IndexPresenter;
use Modules\TimeMonitor\Adapters\Output\EmployeeReportOutputAdapter;
use Modules\TimeMonitor\Models\TimeMonitorRepository;
use Modules\TimeMonitor\Adapters\Output\TimeMonitorOutputAdapter;
use timeMonitor\application\ports\input\CheckInInputPort;
use timeMonitor\application\ports\input\EmployeeReportInputPort;
use timeMonitor\application\usecase\CheckInUseCase;
use timeMonitor\application\usecase\EmployeeReportUseCase;
use timeMonitor\domain\model\TimeRecord;

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
        $data['indexPresenter'] = new IndexPresenter();
        return view("Modules\TimeMonitor\Views\index", $data);
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
