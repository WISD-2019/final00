<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }

}
