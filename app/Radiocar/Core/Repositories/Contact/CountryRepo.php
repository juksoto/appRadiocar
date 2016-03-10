<?php

namespace Radiocar\Core\Repositories\Contact;

use Radiocar\Core\Entities\Contact\RcCountry;
use Illuminate\Database\Eloquent\Model;

class CountryRepo extends Model
{
    public function get()
    {
        return RcCountry::orderBy('country' ,'ASC')
            -> where ( 'active' , true )
            -> get();
    }
}

