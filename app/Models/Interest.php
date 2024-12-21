<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    //

    // muchos a MUCHOS
    public function User(){
        return $this->belongsToMany(User::class);
    }
}
