<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'cname',
        'comment',
        'pro_id'
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'pro_id');
    }
}
