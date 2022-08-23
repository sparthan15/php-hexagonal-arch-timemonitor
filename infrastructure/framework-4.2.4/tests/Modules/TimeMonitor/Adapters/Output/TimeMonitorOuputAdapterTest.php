<?php

use Modules\TimeMonitor\Models\TimeMonitorRepository;
use Modules\TimeMonitor\Adapters\Output\TimeMonitorOutputAdapter;
use PHPUnit\Framework\TestCase;
use tests\util\TestUtilities;

class TImeMonitorOutputAdapterTest extends TestCase
{

    public function test()
    {
        $employeeId = 1;
        $checkIn = TestUtilities::buildTimeRecord($employeeId, new Datetime());
        $data["employee_id"] = 1;
        $data["checkin_datetime"] = new DateTime();
        $data["status"] = "ACTIVE";
        $timeMonitorRepository = $this->createMock(TimeMonitorRepository::class);
        $timeMonitorRepository->method("insert")
        ->with($data)
        ->willReturn($data);
        $timeMonitorOuputAdapter = new TimeMonitorOutputAdapter($timeMonitorRepository);
        $result = $timeMonitorOuputAdapter->checkIn($checkIn);
        $this->assertNotNull($result);
    }
}
