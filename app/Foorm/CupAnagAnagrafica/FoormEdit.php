<?php

namespace App\Foorm\CupAnagAnagrafica;


use Gecche\Cupparis\App\Foorm\Base\FoormEdit as BaseFoormEdit;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class FoormEdit extends BaseFoormEdit
{

//    public function finalizeData($finalizationFunc = null) {
//        if (array_key_exists('indirizzi',$this->formData) && is_array($this->formData['indirizzi'])) {
//
//            $indirizzi = $this->formData['indirizzi'];
//            $i = 0;
//            foreach ($this->model->indirizzi as $indirizzoObj) {
//                $indirizzi[$i]['comune'] = $indirizzoObj->createReferredDataComuneId();
//                $i++;
//            }
//
//            $this->formData['indirizzi'] = $indirizzi;
//        }
//    }

}
