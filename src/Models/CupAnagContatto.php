<?php

namespace Gecche\Cupparis\App\Anagrafiche\Models;

use Gecche\Cupparis\App\Breeze\Breeze;


class CupAnagContatto extends Breeze {

    protected $table = "cup_anag_contatti";

    public $ownerships = false;
    public $timestamps = false;
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
        'anagrafica' => [self::BELONGS_TO, 'related' => \App\Models\CupAnagAnagrafica::class,'foreignKey' => 'rapplegale_id'],

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

    public $columnsForSelectList = ['tipo','value','label'];
    //['id','nome_it'];

    public $defaultOrderColumns = ['tipo' => 'ASC', 'label'];
    //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['tipo','value','label'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';

}
