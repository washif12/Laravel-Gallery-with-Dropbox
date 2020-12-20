<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gallery', 'email', 'path'
    ];
}
