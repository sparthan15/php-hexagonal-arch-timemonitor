<?php

use PHPUnit\Framework\TestCase;
use timeMonitor\domain\exception\ActiveCheckInException;
use timeMonitor\domain\model\TimeRecord;
use timeMonitor\domain\specification\CheckInSpecification;

class CheckInSpecificationTest extends TestCase
{

    public function testGivenNotExistsAnActiveCheckInThenValidationPass()
    {
        $timeRecord2 = new TimeRecord(1, 1, new DateTime());
        $timeRecord2->setStatusToCheckedOut();
        $activeCheckIns[] =  $timeRecord2;
        $timeRecordSevice = new CheckInSpecification($activeCheckIns);
        $this->assertTrue($timeRecordSevice->validate());
    }

    public function testGivenExistsAnActiveCheckInThenValidationDoesNotPass()
    {
        $timeRecord2 = new TimeRecord(1, 1, new DateTime());
        $activeCheckIns[] =  $timeRecord2;
        $timeRecordSevice = new CheckInSpecification($activeCheckIns);
        $this->expectException(ActiveCheckInException::class);
        $timeRecordSevice->validate();
    }
}
