<?php

use Modules\TimeMonitor\Adapters\Dtos\CheckInResponseDTO;
use PHPUnit\Framework\TestCase;

class CheckInResponseDTOTest extends TestCase
{

    public function testCheckInRequestHasErrors()
    {
        $checkInResponseDTO = new CheckInResponseDTO();
        $checkInResponseDTO->hasErrors = true;
        $this->assertTrue($checkInResponseDTO->hasErrors);
    }
}
