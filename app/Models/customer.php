<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasUuids;
    protected $fillable =[
        'last_name',
        'first_name',
        'middle_name',
        'birth_date',
        'age',
        'gender'
    ];
    public function salesSummaries() {
        return $this->hasMany(SalesSummary::class, 'customer_id');
    }

    public function sales() {
        return $this->hasMany(Sales::class, 'customer_id');
    }
}
