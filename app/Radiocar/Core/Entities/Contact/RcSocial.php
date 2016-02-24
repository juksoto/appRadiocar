<?php

namespace Radiocar\Core\Entities\Contact;

use Illuminate\Database\Eloquent\Model;


class RcSocial extends Model
{
    protected $table = 'rc_socials';

    protected $fillable = [
        'social_network',
        'active'
    ];

    public function contact()
    {
        return $this
            -> belongsToMany( 'Radiocar\Core\Entities\RcContact',  'rc_contact_social' , 'social_id' , 'contact_id' )
            -> withTimestamps();
    }


}
