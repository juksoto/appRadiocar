<?php

namespace Radiocar\Core\Entities\Alerts;

use Illuminate\Database\Eloquent\Model;

class RcAlertTypes extends Model
{
    protected $table = 'rc_alert_types';

    protected $fillable = [
        'type_alerts',
        'active',
    ];
}
