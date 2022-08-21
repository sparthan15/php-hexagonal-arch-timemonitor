<?php

use tests\util\TestUtilities;
use timeMonitor\domain\model\TimeRecord;
use PHPUnit\Framework\TestCase;

class TimeRecordTest extends TestCase
{
    private TimeRecord $timeRecord;
    private DateTime $checkInDate;

    protected function setUp(): void
    {
        parent::setUp();
        $this->checkInDate = new DateTime();
        $this->timeRecord = TestUtilities::buildTimeRecord(TestUtilities::buildMaleEmployee(), $this->checkInDate);
    }

    public function testTimeRecordStartWithOutCheckOutDate()
    {
        $this->assertNotNull($this->timeRecord->getId());
        $this->assertNotNull($this->timeRecord->getEmployee());
        $this->assertNotNull($this->timeRecord->getCheckInDateTime());
        $this->expectException(TypeError::class);
        $this->assertNull($this->timeRecord->getCheckOutDateTime());
    }

    public function testSetters()
    {
        $this->timeRecord->setCheckOutDateTime(new DateTime());
        $this->assertNotNull($this->timeRecord->getCheckOutDateTime());
    }
}
