<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasUuids;
    protected $fillable = [
        'name',
        'address',
        'contact_no',
        'email',
        'owner_name'
    ];

    public function stocks() {
        return $this->hasMany(Stock::class, 'supplier_id');
    }
}
