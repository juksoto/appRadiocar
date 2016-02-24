<?php

namespace Radiocar\Core\Entities\Contact;

use Illuminate\Database\Eloquent\Model;

class RcAddress extends Model
{
    protected $table = 'rc_addresses';

    protected $fillable = [
        'address',
        'city_id',
        'contact_id',
        'active'
    ];

    /**
     * Relacion del id address  con id city
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this -> belongsTo('Radiocar\Core\Entities\Contact\RcCity', 'city_id', 'id');
    }

    /**
     * Relacion del id address  con id phone
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function phone()
    {
        return $this -> hasMany('Radiocar\Core\Entities\Contact\RcPhone', 'address_id', 'id');
    }

}
