<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
use HasUuids;

    protected $fillable = [
        'name',
        'brand',
        'price'
    ];

    public function sales() {
        return $this->hasMany(Sales::class, 'item_id');
    }

    public function stocks() {
        return $this->hasMany(Stock::class, 'item_id');
    }

}
