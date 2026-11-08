<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasUuids;
    protected $fillable =[
        'customer_id',
        'item_id',
        'price',
        'discount',
        'quantity',
        'sales_summary_id'
    ];

    public function salesSummaries() {
        return $this->hasMany(SalesSummary::class, 'sales_id');
    }

    public function customer() {
        return $this->hasMany(Customer::class, 'customer_id');
    }

    public function item() {
        return $this->hasMany(Item::class, 'item_id');
    }
}
