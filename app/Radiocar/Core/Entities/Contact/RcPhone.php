<?php

namespace Radiocar\Core\Entities\Contact;

use Illuminate\Database\Eloquent\Model;

class RcPhone extends Model
{
    protected $table = 'rc_phones';

    protected $fillable = [
        'phone',
        'address_id',
        'contact_id',
        'type_phone',
        'active'
    ];

/**
     * Relacion del id address  con id city
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function address()
    {
        return $this -> belongsTo('Radiocar\Core\Entities\Contact\RcAddress', 'address_id', 'id');
    }

}
