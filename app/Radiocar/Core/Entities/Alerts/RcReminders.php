<?php

namespace Radiocar\Core\Entities\Alerts;

use Illuminate\Database\Eloquent\Model;

class RcReminders extends Model
{
    protected $table = 'rc_reminders';

    protected $fillable = [
        'title',
        'date_start',
        'date_finished',
        'remember',
        'short_description',
        'observations',
        'user_id',
        'type_alert_id',
        'active',
    ];
}
