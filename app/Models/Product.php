<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
        'type',
        'vendor',
        'collection_id',
        'gender',
        'olfactory_family',
        'intensity',
        'oil_concentration',
        'notes_top',
        'notes_heart',
        'notes_base',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->title);
            }
        });
        static::updating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->title);
            }
        });
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class)->orderBy('order');
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
