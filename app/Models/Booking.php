<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function eventType()
    {
        return $this->belongsTo(EventType::class);
    }

    public function photographer()
    {
        return $this->belongsTo(User::class, 'photographer_id');
    }
}
