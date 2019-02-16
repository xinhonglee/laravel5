<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryPageTemplate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image_url',
        'status',
        'data',
    ];

    /**
     * The attributes for Default value.
     *
     * @var array
     */
    protected $attributes = [
        'status' => 'publish',
    ];
}
