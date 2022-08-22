<?php

namespace Modules\TimeMonitor\Models;

use CodeIgniter\Model;


class TimeMonitorModel extends Model
{
    protected $table          = 'time_monitor';
    protected $primaryKey     = 'time_momitor_id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields  = [
        'time_monitor_id',
        'user_id',
        'check_in_datetime',
        'check_outin_datetime',
        'created_at',
        'updated_at',
    ];
    protected $useTimestamps      = true;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    public $object;
}
