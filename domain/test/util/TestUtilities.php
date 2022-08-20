<?php

namespace domain\test\util;

use DateTime;
use domain\model\Employee;
use domain\model\TimeRecord;
use domain\model\User;
use domain\vo\Genre;

class TestUtilities
{

    public static function buildUser(): User
    {
        $dateTime = new DateTime();
        return new User("", "cgamboa15", "123456", true, $dateTime, $dateTime);
    }

    public static function buildMaleEmployee(): Employee
    {
        return new Employee(TestUtilities::buildUser(), "CC72336913", "Carlos", "Gamboa", 37, Genre::MALE);
    }

    public static function buildFemaleEmployee(): Employee
    {
        return new Employee(TestUtilities::buildUser(), "CC53849143", "Sonia", "Diaz", 42, Genre::FEMALE);
    }

    public static function buildTimeRecord(Employee $employee, DateTime $inDateTime)
    {
        return new TimeRecord($employee, "", $inDateTime);
    }
}
