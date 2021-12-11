<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [        
        'name',
        'slug',        
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
