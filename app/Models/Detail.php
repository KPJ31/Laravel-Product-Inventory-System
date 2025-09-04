<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'desc',
        'manu',
        'warr',
        'pro_id',
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'pro_id');
    }
}
