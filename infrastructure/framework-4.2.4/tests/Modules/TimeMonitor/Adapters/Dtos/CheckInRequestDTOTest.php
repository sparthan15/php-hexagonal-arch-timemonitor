<?php

use Modules\TimeMonitor\Adapters\Dtos\CheckInRequestDTO;
use Modules\TimeMonitor\Adapters\Dtos\CheckInResponseDTO;
use PHPUnit\Framework\TestCase;

class CheckInRequestDTOTest extends TestCase
{

    public function testProperties()
    {
        $employeeId = 1;
        $checkInDateTime = new DateTime();
        $checkInRequest = new CheckInRequestDTO($employeeId, $checkInDateTime);
        $this->assertNotNull($checkInRequest->getEmployeeId());
        $this->assertNotNull($checkInRequest->getCheckInDateTime());
    }


}
