<?php

namespace App\Models\Relations;

trait CupAnagAnagraficaRelations
{

    public function naturagiuridica() {

        return $this->belongsTo(\App\Models\CupAnagNaturaGiuridica::class, 'naturagiuridica_id', null, null);

    }

    public function professione() {

        return $this->belongsTo(\App\Models\CupAnagProfessione::class, 'professione_id', null, null);

    }

    public function comunenascita() {

        return $this->belongsTo(\App\Models\CupGeoComune::class, 'comunenascita_id', null, null);

    }

    public function comuneresidenza() {

        return $this->belongsTo(\App\Models\CupGeoComune::class, 'comuneresidenza_id', null, null);
    
    }

    public function nazione() {

        return $this->belongsTo(\App\Models\CupGeoNazione::class, 'nazione_id', null, null);
    
    }

    public function nazionalita() {

        return $this->belongsTo(\App\Models\CupGeoNazione::class, 'nazionalita_id', null, null);

    }

    public function rapplegale() {

        return $this->belongsTo(\App\Models\CupAnagAnagrafica::class, 'rapplegale_id', null, null);

    }

    public function stato_civile() {

        return $this->belongsTo(\App\Models\CupAnagStatoCivile::class, 'stato_civile_id', null, null);

    }

    public function contatti() {

        return $this->hasMany(\App\Models\CupAnagContatto::class, 'anagrafica_id');

    }

    public function indirizzi() {

        return $this->hasMany(\App\Models\CupAnagIndirizzo::class, 'anagrafica_id');

    }
}
