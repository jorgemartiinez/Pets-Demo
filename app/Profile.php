<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['phone', 'city', 'province', 'image'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

}
