<?php

namespace App\Policies;

use App\Models\User;
use App\Models\service_reges;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServiceRegesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\service_reges  $serviceReges
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, service_reges $serviceReges)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\service_reges  $serviceReges
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, service_reges $serviceReges)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\service_reges  $serviceReges
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, service_reges $serviceReges)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\service_reges  $serviceReges
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, service_reges $serviceReges)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\service_reges  $serviceReges
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, service_reges $serviceReges)
    {
        //
    }
}
