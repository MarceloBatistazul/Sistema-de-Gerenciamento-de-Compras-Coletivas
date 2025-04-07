<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Order;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Resident;
use App\Models\Product;
use App\Models\CollectivePurchase;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'amount', 'method', 'status', 'payment_date'];

public function order()
{
    return $this->belongsTo(Order::class);
}
}
