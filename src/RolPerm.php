<?php

namespace DevAzizi\RolPermOnLaravel;

class RolPerm
{

    private function __construct(
        private $model,
        private string|null $role,
        private string|null $permission
    )
    {}

    public static function setModel($model)
    {
    }

    public function getRoles()
    {

    }

    public function getPermissions()
    {

    }

    public static function assignRole($model, string $roleName)
    {

    }

    public static function unassignedRole($model, string $roleName)
    {}

}
