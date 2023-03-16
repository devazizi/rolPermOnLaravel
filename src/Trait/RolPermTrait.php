<?php

use DevAzizi\RolPermOnLaravel\Model\Role;

trait RolPermTrait
{
    public function roles()
    {
        return $this->morphMany(Role::class, 'rel');
    }

    public function permissions()
    {
//        return $this->roles()->with('permissions');
    }

}
