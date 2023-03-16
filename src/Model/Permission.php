<?php

namespace DevAzizi\RolPermOnLaravel\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name', 'description'];
}
