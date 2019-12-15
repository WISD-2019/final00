<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function evaluating_adoption_applications()
    {
        return $this->hasMany(AdoptionApplication::class, 'evaluator_id');
    }
    public function approving_adoption_applications()
    {
        return $this->hasMany(AdoptionApplication::class, 'approver_id');
    }

}
