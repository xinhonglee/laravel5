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
        'user_id',
        'title',
        'description',
        'video_id',
        'cover_id',
        'video_url',
        'cover_url',
        'video_category_id',
        'date',
        'slug'
    ];

    public function getISODateAttribute()
    {
        return date('c', strtotime($this->date));
    }

    public function getCoverAttribute()
    {
        return str_replace("https://res.cloudinary.com/loopsider/image/upload/", "https://res.cloudinary.com/loopsider/image/upload/q_auto,f_auto,dpr_auto,w_auto/", $this->cover_url);
    }

    public function category()
    {
        return $this->belongsTo('App\Models\VideoCategory', 'video_category_id', 'id');
    }

    public function setVideoCategoryIdAttribute($value) {
        $this->attributes['video_category_id'] = empty($value) ? null : $value;
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
