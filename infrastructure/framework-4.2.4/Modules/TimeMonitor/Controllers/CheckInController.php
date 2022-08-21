<?php

namespace Modules\TimeMonitor\Controllers;

use App\Controllers\BaseController;
use timeMonitor\application\usecase;

class CheckInController extends BaseController
{

    private $checkInUseCase;
    
    public function __construct(){
        $this->$checkInUseCase = new CheckInInputAdapter();
    }
    
    public function index()
    {
        
        return view("Modules\TimeMonitor\Views\index");
    }
}
