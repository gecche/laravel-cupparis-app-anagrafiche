<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CupAnagStatoCivile;
use Gecche\PolicyBuilder\Facades\PolicyBuilder;
use Illuminate\Auth\Access\HandlesAuthorization;

class CupAnagStatoCivilePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupAnagStatoCivile  $model
     * @return mixed
     */
    public function view(User $user, CupAnagStatoCivile $model)
    {
        //
        if ($user && $user->can('view cup_anag_stato_civile')) {
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
        if ($user && $user->can('create cup_anag_stato_civile')) {
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
    public function update(User $user, CupAnagStatoCivile $model)
    {
        //
        if ($user && $user->can('edit cup_anag_stato_civile')) {
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
    public function delete(User $user, CupAnagStatoCivile $model)
    {
        //
        if ($user && $user->can('delete cup_anag_stato_civile')) {
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
        if ($user && $user->can('list cup_anag_stato_civile')) {
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

//        if ($user && $user->can('view all cup_anag_stato_civile')) {
//            return Gate::aclAll($builder);
//        }

        if ($user && $user->can('view cup_anag_stato_civile')) {
            return PolicyBuilder::all($builder,CupAnagStatoCivile::class);
        }

        return PolicyBuilder::none($builder,CupAnagStatoCivile::class);
    }
}
