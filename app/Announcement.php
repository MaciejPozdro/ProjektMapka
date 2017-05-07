<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = ['price','address','post_code','description','contact','city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function photo()
    {
        return $this->hasMany(Photo::class);
    }
}
