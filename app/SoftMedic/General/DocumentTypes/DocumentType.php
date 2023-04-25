<?php

namespace App\SoftMedic\General\DocumentTypes;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    protected $table = 'type_document';

    protected $primaryKey = 'idTypeDocument';

    protected $appends = ['id'];

    public function getIdAttribute()
    {
        return $this->idTypeDocument;
    }

}
