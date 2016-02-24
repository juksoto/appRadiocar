<?php

namespace Maestrando\Core\Entities\Contact;

use Illuminate\Database\Eloquent\Model;

class RcEmail extends Model
{
    protected $table = 'rc_emails';

    protected $fillable = [
        'email',
        'contact_id',
        'active'
    ];

    /**
     * Relacion del id contact con id email
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact()
    {
        return $this -> belongsTo('Radiocar\Core\Entities\RcContact','contact_id' , 'id');
    }


}
