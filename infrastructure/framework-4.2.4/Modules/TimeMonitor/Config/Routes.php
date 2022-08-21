<?php
$routes->group("time-monitor", ["namespace" => "\Modules\TimeMonitor\Controllers"], function ($routes) {

    $routes->get("/", "CheckInController::index");
});
