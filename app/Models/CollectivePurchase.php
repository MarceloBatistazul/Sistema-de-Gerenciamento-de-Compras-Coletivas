<?php

namespace App\Models;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Product;
use App\Models\Resident;

use Illuminate\Database\Eloquent\Model;

class CollectivePurchase extends Model
{
    
    use HasFactory;

    protected $fillable = ['description', 'purchase_date', 'status'];

public function orders()
{
    return $this->hasMany(Order::class);
}
}
