<?php

namespace App\Models;

use App\Models\Detail;
use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'pname',
        'price',
        'stock'
    ];

    public function detail(): HasOne {
        return $this->hasOne(Detail::class, 'pro_id');
    }

    public function review(): HasMany {
        return $this->hasMany(Review::class, 'pro_id');
    }
}
