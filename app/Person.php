<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function attributes(){
        return $this->hasOne('\App\PersonAttribute');
    }
}
