<?php

namespace App\Models;

use App\Enums\StoreStatus;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'logo',
        'description',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => StoreStatus::class,
        ];
    }
}
