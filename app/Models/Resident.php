<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Resident extends Model
{
    Use hasFactory;

    protected $fillable = ['name', 'email', 'phone', 'apartment'];

    /**
     * Get the orders for the resident.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
