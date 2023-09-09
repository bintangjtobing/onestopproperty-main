<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    protected $table = 'activitylog';
    public function userId()
    {
        return $this->belongsTo(User::class, 'causer_id');
    }
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->format('l, d M Y H:i A');
    }
}
