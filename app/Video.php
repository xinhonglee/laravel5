<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'date', 'video_id', 'cover_id'
    ];

    public function getISODateAttribute()
    {
        return date('c', strtotime($this->date));
    }
}
