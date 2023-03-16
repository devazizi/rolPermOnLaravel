<?php

namespace DevAzizi\RolPermOnLaravel\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['description', 'name'];

    public function rel()
    {
        return $this->morphTo();
    }
}
