<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['title', 'description', 'animal', 'name', 'birthday', 'gender', 'weight', 'sterilized', 'image', 'state', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
