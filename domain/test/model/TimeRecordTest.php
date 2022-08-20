<?php

use domain\model\TimeRecord;
use domain\test\util\TestUtilities;
use PHPUnit\Framework\TestCase;

class TimeRecordTest extends TestCase
{
    private TimeRecord $timeRecord;
    private DateTime $inDateTime;

    protected function setUp(): void
    {
        parent::setUp();
        $this->inDateTime = new DateTime();
        $this->timeRecord = TestUtilities::buildTimeRecord(TestUtilities::buildMaleEmployee(), $this->inDateTime);
    }

    public function testTimeRecordStartWithNoOutDate()
    {
        $this->assertNotNull($this->timeRecord->getId());
        $this->assertNotNull($this->timeRecord->getEmployee());
        $this->assertNotNull($this->timeRecord->getInDateTime());
        $this->expectException(TypeError::class);
        $this->assertNull($this->timeRecord->getOutDateTime());
    }

    public function testSetOutDate()
    {
        $this->timeRecord->setOutDateTime(new DateTime());
        $this->assertNotNull($this->timeRecord->getOutDateTime());
    }
}
