<?php

namespace Radiocar\Core\Entities\Contact;

use Illuminate\Database\Eloquent\Model;

class RcCity extends Model
{
    protected $table = 'rc_cities';

    protected $fillable = [
        'country_id',
        'city',
        'active'
    ];

    /**
     * Relacion del id city con country_id
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function country()
    {
        return $this->belongsTo('Radiocar\Core\Entities\Contact\RcCountry','country_id');
    }
}
