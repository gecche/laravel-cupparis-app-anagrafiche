<?php

namespace Gecche\Cupparis\App\Anagrafiche\Models;

use Gecche\Cupparis\App\Breeze\Breeze;


class CupAnagIndirizzo extends Breeze {

    protected $table = "cup_anag_indirizzi";

    public $ownerships = true;
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    protected $guarded = [
        'id',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public static $relationsData = [
        'anagrafica' => [self::BELONGS_TO, 'related' => \App\Models\CupAnagAnagrafica::class,'foreignKey' => 'anagrafica_id'],
        'tipologia' => [self::BELONGS_TO, 'related' => \App\Models\CupAnagTipologiaIndirizzo::class,'foreignKey' => 'tipologia_id'],
        'comune' => [self::BELONGS_TO, 'related' => \App\Models\CupGeoComune::class,'foreignKey' => 'comune_id'],

//        'tickets' => [self::HAS_MANY, 'related' => 'App\Models\Ticket'],
    ];

    public $appends = [
        //'mainrole'
    ];

    public static $rules = array(
        //'name' => 'required|between:4,255|unique:users,name',
        //'email' => 'required|email|unique:users,email',
//        'password' => 'required|alpha_num|between:4,16|confirmed',
//        'password_confirmation' => 'required|alpha_num|between:4,16',
//        'nome' => 'between:1,255',
//        'cognome' => 'between:1,255',
    );

    public $columnsForSelectList = ['indirizzo'];
    //['id','nome_it'];

    public $defaultOrderColumns = ['anagrafica_id' => 'ASC', 'ordine' => 'ASC'];
    //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['indirizzo'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';

    public function createReferredDataComuneId()
    {
        $relationNameId = 'comune_id';
        $relationName = 'comune';
        if ($this->getKey() && $this->$relationNameId) {
            return [
                'nome_it' => $this->$relationName->nome_it,
                'sigla_provincia' => $this->$relationName->sigla_provincia,
                'nazione|codice_iso_3' => $this->$relationName->nazione_id
                    ? $this->$relationName->nazione->codice_iso_3 : 'ITA',
            ];
        }
        return [
            'nome_it' => null,
            'sigla_provincia' => null,
            'nazione|codice_iso_3' => null,
        ];
    }

}
