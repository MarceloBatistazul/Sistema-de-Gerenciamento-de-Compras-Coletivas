<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Order;
use App\Models\CollectivePurchase;
use App\Models\Resident;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    Use HasFactory;

    protected $fillable = ['name', 'description', 'unit', 'price', 'min_quantity'];

public function orders()
{
    return $this->belongsToMany(Order::class)
        ->withPivot('quantity', 'unit_price');
}
}
