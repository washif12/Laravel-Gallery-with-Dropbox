<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shareable_links extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gallery', 'email', 'image_id', 'link'
    ];
}
