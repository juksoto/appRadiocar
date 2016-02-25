<?php

namespace Radiocar\Core;

use Illuminate\Database\Eloquent\Model;

class Helpers extends Model
{
    /**
     * Valida el campo active de un registro
     * @param $active
     * @return array
     */
    public function valueActive($active)
    {

        if ($active == 0)
        {
            $active = 1;
            $message =  trans('admin.status.has_been_published');
            return array('message' => $message, 'active' => $active );
        }
        else
        {
            $active = 0;
            $message =  trans('admin.status.has_been_removed');
            return array('message' => $message, 'active' => $active );
        }
    }

}
