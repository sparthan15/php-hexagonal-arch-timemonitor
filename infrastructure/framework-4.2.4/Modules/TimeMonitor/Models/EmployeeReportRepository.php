<?php

namespace Modules\TimeMonitor\Models;

use CodeIgniter\Model;
use DateTime;
use timeMonitor\application\ports\output\EmployeeReportOutoutPort;
use timeMonitor\domain\model\TimeRecord;
use timeMonitor\domain\vo\CheckInStatus;

class EmployeeReportRepository extends Model implements EmployeeReportOutoutPort
{

    protected $table          = 'time_monitor';
    protected $primaryKey     = 'time_monitor_id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields  = [
        'time_monitor_id',
        'employee_id',
        'checkin_datetime',
        'checkout_datetime',
        'created_at',
        'updated_at',
    ];
    protected $useTimestamps      = true;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    public $object;

    public function getTimeRecordsByEmployee(int $employeeId): array
    {
        $result = $this->getWhere(['employee_id' => $employeeId, 'status' => CheckInStatus::ACTIVE])->getResultArray();
        $list = [];
        foreach ($result as $timeRecord) {
            $list[] = new TimeRecord($employeeId, $timeRecord['time_monitor_id'], DateTime::createFromFormat('Y-m-d H:i:s', $timeRecord['checkin_datetime']));
        }

        return $list;
    }
}
