<?php

namespace Radiocar\Core\Entities\Alerts;

use Illuminate\Database\Eloquent\Model;

class RcAlerts extends Model
{
    protected $table = 'rc_alerts';

    protected $fillable = [
        'title',
        'date_start',
        'date_finished',
        'remember',
        'short_description',
        'observations',
        'vehicle_id',
        'work_id',
        'user_id',
        'type_alert_id',
        'active',
    ];
}
