<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityProduct extends Model
{
    use HasFactory;

    protected $table = "city_product_pivot";

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'city_id',
        'product_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function city()
    {
        return $this->belongsTo(City::class , 'city_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class , 'product_id');
    }
}
