<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'status',
        'data',
    ];

    public function getISODateAttribute()
    {
        return date('c', strtotime($this->date));
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
