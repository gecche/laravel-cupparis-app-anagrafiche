<?php

namespace App\Models\Relations;

trait CupAnagIndirizzoRelations
{

    public function anagrafica() {

        return $this->belongsTo(\App\Models\CupAnagAnagrafica::class, 'anagrafica_id', null, null);

    }

    public function tipologia() {

        return $this->belongsTo(\App\Models\CupAnagTipologiaIndirizzo::class, 'tipologia_id', null, null);

    }

    public function comune() {

        return $this->belongsTo(\App\Models\CupGeoComune::class, 'comune_id', null, null);

    }
}
