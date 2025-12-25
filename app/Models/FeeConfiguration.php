<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeeConfiguration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'config_name',
        'config_code',
        'description',
        'fee_type',
        'calculation_method',
        'base_amount',
        'min_amount',
        'max_amount',
        'calculation_formula',
        'business_type_id',
        'product_type_id',
        'region_id',
        'effective_from',
        'effective_until',
        'is_active',
        'include_tax',
        'tax_percentage',
        'parameters',
        'notes',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'base_amount' => 'decimal:2',
        'min_amount' => 'decimal:2',
        'max_amount' => 'decimal:2',
        'tax_percentage' => 'decimal:2',
        'is_active' => 'boolean',
        'include_tax' => 'boolean',
        'effective_from' => 'date',
        'effective_until' => 'date',
        'parameters' => 'array',
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function businessType()
    {
        return $this->belongsTo(BusinessType::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
