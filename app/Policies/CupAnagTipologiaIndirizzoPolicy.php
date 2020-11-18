<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CupAnagTipologiaIndirizzo;
use Gecche\PolicyBuilder\Facades\PolicyBuilder;
use Illuminate\Auth\Access\HandlesAuthorization;

class CupAnagTipologiaIndirizzoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupAnagTipologiaIndirizzo  $model
     * @return mixed
     */
    public function view(User $user, CupAnagTipologiaIndirizzo $model)
    {
        //
        if ($user && $user->can('view cup_anag_tipologia_indirizzo')) {
            return true;
        }

        return false;

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        if ($user && $user->can('create cup_anag_tipologia_indirizzo')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Deal  $model
     * @return mixed
     */
    public function update(User $user, CupAnagTipologiaIndirizzo $model)
    {
        //
        if ($user && $user->can('edit cup_anag_tipologia_indirizzo')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Deal  $model
     * @return mixed
     */
    public function delete(User $user, CupAnagTipologiaIndirizzo $model)
    {
        //
        if ($user && $user->can('delete cup_anag_tipologia_indirizzo')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can access to the listing of the models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function listing(User $user)
    {
        //
        if ($user && $user->can('list cup_anag_tipologia_indirizzo')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can access to the listing of the models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function acl(User $user, $builder)
    {

//        if ($user && $user->can('view all cup_anag_tipologia_indirizzo')) {
//            return Gate::aclAll($builder);
//        }

        if ($user && $user->can('view cup_anag_tipologia_indirizzo')) {
            return PolicyBuilder::all($builder,CupAnagTipologiaIndirizzo::class);
        }

        return PolicyBuilder::none($builder,CupAnagTipologiaIndirizzo::class);
    }
}
