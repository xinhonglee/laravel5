<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'date', 'video_id', 'cover_id', 'video_url', 'cover_url'
    ];

    public function getISODateAttribute()
    {
        return date('c', strtotime($this->date));
    }
}
