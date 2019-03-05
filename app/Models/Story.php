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
        'title',
        'slug',
        'status',
        'start_publication_date',
        'end_publication_date',
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

    public function getISODateAttribute()
    {
        return date('c', strtotime($this->date));
    }

    public function getDataAttribute($value){
        if(is_string($value)){
            return json_decode($value);
        }
        return $value;
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
