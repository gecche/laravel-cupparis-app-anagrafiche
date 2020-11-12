<?php

namespace App\Models\Relations;

trait CupAnagContattoRelations
{

    public function anagrafica() {

        return $this->belongsTo(\App\Models\CupAnagAnagrafica::class, 'anagrafica_id', null, null);

    }

}
