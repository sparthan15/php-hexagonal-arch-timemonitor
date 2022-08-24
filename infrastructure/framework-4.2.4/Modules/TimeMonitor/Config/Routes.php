<?php
$routes->group("time-monitor", ["namespace" => "\Modules\TimeMonitor\Controllers"], function ($routes) {

    $routes->get("/", "HomeController::index");
    $routes->get("check-in", "CheckInInputAdapter::checkIn");
});
