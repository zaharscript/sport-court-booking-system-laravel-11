<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Court extends Model
{
    protected $fillable = [
        'name',
        'type',
        'price_per_hour',
        'is_available',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
