<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function adoption_application()
    {
        return $this->hasOne(AdoptionApplication::class);
    }
    public function adopter()
    {
        return $this->belongsTo(Member::class);
    }

}
