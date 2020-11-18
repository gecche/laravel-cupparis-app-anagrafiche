<?php

namespace App\Models\Relations;

trait CupAnagIndirizzoRelations
{

    public function anagrafica() {

        return $this->belongsTo(\App\Models\CupAnagAnagrafica::class, 'anagrafica_id', null, null);

    }

}
