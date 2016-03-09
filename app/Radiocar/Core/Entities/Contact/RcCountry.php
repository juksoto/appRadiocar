<?php

namespace Radiocar\Core\Entities\Contact;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class RcCountry extends Model
{
    use Sortable;

    protected $table = 'rc_countries';

    protected $fillable = [
        'country',
        'iso',
        'active'
    ];

    protected $sortable = [
        'id',
        'country',
        'iso',
    ];

    /**
     * Relacion entre pais y ciudades. Usando el id del pais, retorna todas las ciudades que hay con ese id.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function city()
    {
        return $this->hasMany('Radiocar\Core\Entities\Contact\RcCity', 'country_id');
    }

    /**
     * Retorna las  similitudes conforme a la cadena que se recibe como parametro.
     * @param $query
     * @param $name string Nombre del pais que escribieron en el campo search
     * @return mixed
     */
    public function scopeCountryName($query, $name)
    {
        $name = ucwords(strtolower($name));

        if (trim($name) != "")
        {
            $query -> where('country',"ILIKE", "%$name%");
        }
    }

    /**
     * Retorna todos los registros donde el campo active es igual al que enviaron a la funcion.
     * @param $query
     * @param $value boolean valor actual del campo active. Si es "" lo vuelve por defecto true
     * @return mixed
     */
    public function scopeActive($query, $value)
    {

        if ($value == "")
        {
            $value = true;
        }
        return $query -> where('active', $value);
    }

}
