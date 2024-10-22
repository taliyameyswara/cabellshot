<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'state_id'];

    // Relasi ke State
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
