<?php

use Modules\TimeMonitor\Models\TimeMonitorRepository;
use Modules\TimeMonitor\Adapters\Output\TimeMonitorOutputAdapter;
use PHPUnit\Framework\TestCase;
use tests\util\TestUtilities;

class TImeMonitorOutputAdapterTest extends TestCase
{

    public function test()
    {
        $checkIn = TestUtilities::buildTimeRecord(TestUtilities::buildFemaleEmployee(), new Datetime());
        $timeMonitorRepository = $this->createMock(TimeMonitorRepository::class);
        $timeMonitorRepository->method("insert")
        ->with($checkIn)
        ->willReturn($checkIn);
        $timeMonitorOuputAdapter = new TimeMonitorOutputAdapter($timeMonitorRepository);
        $result = $timeMonitorOuputAdapter->checkIn($checkIn);
        $this->assertNotNull($result);
    }
}
