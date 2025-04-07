<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\CollectivePurchase;
use App\Models\Resident;
use App\Models\Product;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    use HasFactory;
    protected $fillable = ['resident_id', 'collective_purchase_id', 'status'];

public function resident()
{
    return $this->belongsTo(Resident::class);
}

public function collectivePurchase()
{
    return $this->belongsTo(CollectivePurchase::class);
}

public function products()
{
    return $this->belongsToMany(Product::class)
        ->withPivot('quantity', 'unit_price');
}

public function payment()
{
    return $this->hasOne(Payment::class);
}
}
