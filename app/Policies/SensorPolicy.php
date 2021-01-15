<?php

namespace App\Policies;

use App\Models\Sensor;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SensorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return  $user->role === 'admin' ||
                $user->role === 'technician';
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Sensor  $sensor
     * @return mixed
     */
    public function view(User $user, Sensor $sensor)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return  $user->role === 'admin' ||
                $user->role === 'technician';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Sensor  $sensor
     * @return mixed
     */
    public function update(User $user, Sensor $sensor)
    {
        return  $user->role === 'admin' ||
                $user->role === 'technician';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Sensor  $sensor
     * @return mixed
     */
    public function delete(User $user, Sensor $sensor)
    {
        return  $user->role === 'admin' ||
                $user->role === 'technician';
    }
}
