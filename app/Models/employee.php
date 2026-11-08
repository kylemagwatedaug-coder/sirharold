<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasUuids;
      protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'position',
        'birth_date',
        'age',
        'civil_status',
        'gender',
    ];

    public function salesSummaries() {
        return $this->hasMany(SalesSummary::class, 'employee_id');
    }
}
