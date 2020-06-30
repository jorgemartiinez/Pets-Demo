<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['phone', 'city', 'province'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

}
