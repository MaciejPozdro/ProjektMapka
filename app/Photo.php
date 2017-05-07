<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['announcement_id','name'];

    public function announcement()
    {
        return $this ->belongsTo(Announcement::class);
    }
}
