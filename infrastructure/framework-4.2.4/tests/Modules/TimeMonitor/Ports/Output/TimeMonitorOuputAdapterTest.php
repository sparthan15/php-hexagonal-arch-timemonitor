<?php

use Modules\TimeMonitor\Models\TimeMonitorModel;
use Modules\TimeMonitor\Ports\Output\TimeMonitorOutputAdapter;
use PHPUnit\Framework\TestCase;
use tests\util\TestUtilities;

class TImeMonitorOutputAdapterTest extends TestCase
{

    public function test()
    {
        $timeMonitorModel = $this->createStub(TimeMonitorModel::class);
        $timeMonitorOuputAdapter = new TimeMonitorOutputAdapter($timeMonitorModel);
        $result = $timeMonitorOuputAdapter->checkIn(TestUtilities::buildTimeRecord(TestUtilities::buildFemaleEmployee(), new Datetime()));
        $this->assertNotNull($result);
    }
}
