<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    public function transactions()
    {
        return $this->hasMany(Product::class, 'categories_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'categories_id', 'id');
    }
}
