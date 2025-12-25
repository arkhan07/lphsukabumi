<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'submission_id',
        'product_type_id',
        'product_name',
        'product_code',
        'product_description',
        'brand_name',
        'packaging_type',
        'net_weight',
        'weight_unit',
        'barcode',
        'hs_code',
        'halal_status',
        'halal_notes',
        'monthly_production_volume',
        'shelf_life_duration',
        'shelf_life_unit',
        'is_active',
    ];

    protected $casts = [
        'net_weight' => 'decimal:2',
        'shelf_life_duration' => 'decimal:2',
        'monthly_production_volume' => 'integer',
        'is_active' => 'boolean',
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
