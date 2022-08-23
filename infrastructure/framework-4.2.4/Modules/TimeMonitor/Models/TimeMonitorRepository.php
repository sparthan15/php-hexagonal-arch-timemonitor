<?php

namespace Modules\TimeMonitor\Models;

use CodeIgniter\Model;


class TimeMonitorRepository extends Model
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
}
