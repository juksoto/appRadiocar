<?php

namespace Radiocar\Core\Entities\Contact;

use Illuminate\Database\Eloquent\Model;

class RcCountry extends Model
{
    protected $table = 'rc_countries';

    protected $fillable = [
        'country',
        'iso',
        'active'
    ];

    /**
     * Relacion entre pais y ciudades. Usando el id del pais, retorna todas las ciudades que hay con ese id.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function city()
    {
        return $this->hasMany('Radiocar\Core\Entities\Contact\RcCity', 'country_id');
    }
}
