<?php
$routes->group("time-monitor", ["namespace" => "\Modules\TimeMonitor\Controllers"], function ($routes) {

    $routes->get("/", "CheckInInputAdapter::index");
    $routes->post("/check-in", "CheckInInputAdapter::checkIn");
});
