<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class SalesSummary extends Model
{
    use HasUuids;
    protected $fillable =[
        'amount',
        'discount',
        'customer_id',
        'employee_id'
    ];

    public function customer() {
        return $this->belongsTo(Sales::class, 'customer_id');
    }
    public function sales() {
        return $this->belongsTo(Sales::class, 'sales_id');
    }

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
