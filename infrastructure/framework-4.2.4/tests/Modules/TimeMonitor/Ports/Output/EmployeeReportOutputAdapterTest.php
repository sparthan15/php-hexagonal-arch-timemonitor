<?php

use Modules\TimeMonitor\Models\EmployeeReportRepository;
use PHPUnit\Framework\TestCase;

class EmployeeReportOutputAdapterTest extends TestCase{

    private $adapter;

    private $model;


    public function test(){
        $this->model = $this->createStub(EmployeeReportRepository::class);
        $this->model->method("getTimeRecorsByEmployee")->willReturn([]);
        $this->adapter = new EmployeeOutputAdapter($this->model);
    }
}