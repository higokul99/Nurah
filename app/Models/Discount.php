<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'code',
        'type',
        'value',
        'status',
        'starts_at',
        'ends_at',
        'usage_limit',
        'uses_count',
    ];

    protected $casts = [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'discount_product');
    }
}
