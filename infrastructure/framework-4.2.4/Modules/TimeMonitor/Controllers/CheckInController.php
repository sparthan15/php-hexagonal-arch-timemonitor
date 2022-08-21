<?php

namespace Modules\TimeMonitor\Controllers;

use App\Controllers\BaseController;

class CheckInController extends BaseController
{

    public function index()
    {
        return view("Modules\TimeMonitor\Views\index");
    }
}
