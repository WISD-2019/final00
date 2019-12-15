<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdoptionApplication extends Model
{
    //
    public function applicant()
    {
        return $this->belongsTo(Member::class);
    }
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
    public function evaluator()
    {
        return $this->belongsTo(Staff::class, 'evaluator_id');
    }
    public function approver()
    {
        return $this->belongsTo(Staff::class, 'approver_id');
    }

}
