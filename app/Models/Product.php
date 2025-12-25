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
        'name',
        'sku',
        'brand',
        'variant',
        'packaging',
        'weight',
        'weight_unit',
        'description',
        'ingredients',
        'image_path',
        'halal_certificate_number',
        'certificate_issue_date',
        'certificate_expiry_date',
        'halal_status',
    ];

    protected $casts = [
        'weight' => 'decimal:2',
        'certificate_issue_date' => 'date',
        'certificate_expiry_date' => 'date',
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
