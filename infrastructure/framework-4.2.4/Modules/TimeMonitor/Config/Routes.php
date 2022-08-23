<?php
$routes->group("time-monitor", ["namespace" => "\Modules\TimeMonitor\Controllers"], function ($routes) {

    $routes->get("/", "CheckInInputAdapter::index");
    $routes->get("check-in", "CheckInInputAdapter::checkIn");
});
