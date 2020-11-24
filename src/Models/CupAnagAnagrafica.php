<?php

namespace Gecche\Cupparis\App\Anagrafiche\Models;

use App\Models\Attachment;
use App\Models\CupAnagContatto;
use App\Models\CupAnagIndirizzo;
use App\Models\CupAnagNaturaGiuridica;
use App\Models\CupAnagProfessione;
use App\Models\CupAnagStatoCivile;
use App\Models\CupAnagTipologiaAnagrafica;
use App\Models\CupGeoComune;
use App\Models\CupGeoNazione;
use App\Models\Foto;
use Gecche\Cupparis\App\Breeze\Breeze;


class CupAnagAnagrafica extends Breeze {

    protected $table = "cup_anag_anagrafiche";

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
        'fotos' => [self::MORPH_MANY, 'related' => Foto::class, 'name' => 'mediable'],
        'attachments' => [self::MORPH_MANY, 'related' => Attachment::class, 'name' => 'mediable'],

        'naturagiuridica' => [self::BELONGS_TO, 'related' => CupAnagNaturaGiuridica::class, 'foreignKey' => 'naturagiuridica_id'],
        'professione' => [self::BELONGS_TO, 'related' => CupAnagProfessione::class, 'foreignKey' => 'professione_id'],
        'comunenascita' => [self::BELONGS_TO, 'related' => CupGeoComune::class, 'foreignKey' => 'comunenascita_id'],
        'comuneresidenza' => [self::BELONGS_TO, 'related' => CupGeoComune::class, 'foreignKey' => 'comuneresidenza_id'],
        'nazione' => [self::BELONGS_TO, 'related' => CupGeoNazione::class,'foreignKey' => 'nazione_id'],
        'nazionalita' => [self::BELONGS_TO, 'related' => CupGeoNazione::class,'foreignKey' => 'nazionalita_id'],
        'rapplegale' => [self::BELONGS_TO, 'related' => \App\Models\CupAnagAnagrafica::class,'foreignKey' => 'rapplegale_id'],
        'stato_civile' => [self::BELONGS_TO, 'related' => CupAnagStatoCivile::class, 'foreignKey' => 'stato_civile_id'],

        'contatti' => [self::HAS_MANY, 'related' => CupAnagContatto::class, 'foreignKey' => 'anagrafica_id'],
        'indirizzi' => [self::HAS_MANY, 'related' => CupAnagIndirizzo::class, 'foreignKey' => 'anagrafica_id'],
        'raggruppamenti' => [self::BELONGS_TO_MANY, 'related' => CupAnagTipologiaAnagrafica::class,
            'table' => 'cup_anag_raggruppamenti_anagrafiche',
            'foreignPivotKey' => 'anagrafica_id',
            'relatedPivotKey' => 'tipologia_id',
        ],

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

    public $columnsForSelectList = ['id','denominazione'];
    //['id','nome_it'];

    public $defaultOrderColumns = ['denominazione' => 'ASC', ];
    //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['id','denominazione'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';

    protected function createReferredDataComune($relationName)
    {
        $relationNameId = $relationName . '_id';
        if ($this->getKey() && $this->$relationNameId) {
            return [
                'nome_it' => $this->$relationName->nome_it,
                'sigla_provincia' => $this->$relationName->sigla_provincia,
                'nazione_iso3' => $this->$relationName->nazione_iso3,
            ];
        }
        return [
            'nome_it' => null,
            'sigla_provincia' => null,
            'nazione_iso3' => null,
        ];
    }

    public function createReferredDataComuneresidenzaId()
    {
        return $this->createReferredDataComune('comuneresidenza');
    }

    public function createReferredDataComunenascitaId()
    {
        return $this->createReferredDataComune('comunenascita');
    }
//    public function createReferredDataComuneId($value)
//    {
//        return [];
//    }
}
