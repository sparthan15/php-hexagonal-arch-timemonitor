<?php

namespace Modules\TimeMonitor\Controllers;

use App\Controllers\BaseController; 
use timeMonitor\application\usecase\EmployeeReportUseCase;

class HomeController extends BaseController
{
    private EmployeeReportUseCase $employeeReportUseCase;
    private IndexPresenter $presenter;

    public function __construct(EmployeeReportUseCase $employeeReportUseCase)
    {
        $this->employeeReportUseCase = $employeeReportUseCase;
        $this->presenter = new IndexPre ();
    }

    public function index()
    {
        $this->presenter->activeCheckIn = $this->employeeReportUseCase->getTimeRecordsByEmployee(1);
        $data['presenter'] = $this->presenter;
        return view("Modules\TimeMonitor\Views\index", $data);
    }
}
