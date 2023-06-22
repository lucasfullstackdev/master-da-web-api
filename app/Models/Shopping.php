<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;

    protected $table = 'shopping';
    protected $fillable = [
        'products',
        'total',
        'user_id'
    ];

    public function getProductsAttribute(string $products)
    {
        return json_decode($products);
    }

    public function setProductsAttribute(array $products)
    {
        $this->attributes['products'] = json_encode($products);
        $this->setTotalAttribute();
    }

    public function setTotalAttribute()
    {
        $products = json_decode($this->attributes['products']);
        $this->attributes['total'] = array_sum(array_column($products, 'price'));
    }

    public function client()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
