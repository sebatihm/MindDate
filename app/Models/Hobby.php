<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    //
    // relacion muchos a muchos
    public function User(){
        return $this->belongsToMany(User::class);
    }
}
