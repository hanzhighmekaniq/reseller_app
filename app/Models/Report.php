<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reseller1_id', 
        'product_id',
        'total_sales',
        'return',
        'profit',
        'sold',
        'payment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reseller1()
    {
        return $this->belongsTo(User::class, 'reseller1_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

