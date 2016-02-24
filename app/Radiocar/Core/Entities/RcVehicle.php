<?php

namespace Radiocar\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class RcVehicle extends Model
{
    protected $table = 'rc_vehicles';

    protected $fillable = [
        'license',
        'vehicle_model',
        'color',
        'nro_identification',
        'class_make_line_id',
        'contact_id',
        'active'
    ];

   

}
