<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'url',
        'product_id'
    ];

    public function getUrlAttribut($url)
    {
        return config('app.url'). Storage::url($url);
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
