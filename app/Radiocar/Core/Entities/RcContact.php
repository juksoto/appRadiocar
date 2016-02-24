<?php

namespace Radiocar\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class RcContact extends Model
{
    protected $table = 'rc_contacts';

    protected $fillable = [
        'person_id',
        'company_id',
        'user_id',
        'active'
    ];

    public function social()
    {
        return $this
            -> belongsToMany( 'Radiocar\Core\Entities\Contact\RcSocial', 'rc_contact_has_social_networks' , 'contact_id' , 'social_network_id' )
            -> withTimestamps();
    }

    /**
     * Relacion del id contact con id email
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function email()
    {
        return $this -> hasMany('Radiocar\Core\Entities\Contact\RcEmail', 'contact_id' ,'id');
    }

    /**
     * Relacion del id contact con id address
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function address()
    {
        return $this -> hasMany('Radiocar\Core\Entities\Contact\RcAddress', 'contact_id' ,'id');
    }

    /**
     * Relacion id contacto con id phone
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function phone()
    {
        return $this -> hasMany('Radiocar\Core\Entities\Contact\RcPhone', 'contact_id', 'id');
    }

    /**
     * relacion muchos a muchos con id social y id contacts
     * @return $this
     */
    public function socialContact()
    {
        return $this
            -> belongsToMany( 'Radiocar\Core\Entities\Contact\RcSocial',  'rc_contact_has_socials' , 'contact_id'  , 'social_network_id')
            -> withPivot('social' , 'active')
            -> withTimestamps();
    }



}
