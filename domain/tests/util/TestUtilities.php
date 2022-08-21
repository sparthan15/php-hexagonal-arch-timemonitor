<?php

namespace tests\util;

use DateTime;
use timeMonitor\domain\model\Employee;
use timeMonitor\domain\model\TimeRecord;
use timeMonitor\domain\model\User;
use timeMonitor\domain\vo\Genre;

class TestUtilities
{

    public static function buildUser(): User
    {
        $dateTime = new DateTime();
        return new User("", "cgamboa15", "123456", true, $dateTime, $dateTime);
    }

    public static function buildMaleEmployee(): Employee
    {
        
        return new Employee(TestUtilities::buildUser(), "CC72336913", "Carlos", "Gamboa", 37, new Genre(Genre::MALE));
    }

    public static function buildFemaleEmployee(): Employee
    {
        return new Employee(TestUtilities::buildUser(), "CC53849143", "Sonia", "Diaz", 42, new Genre(Genre::FEMALE));
    }

    public static function buildTimeRecord(Employee $employee, DateTime $inDateTime)
    {
        return new TimeRecord($employee, "", $inDateTime);
    }
}
