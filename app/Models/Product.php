<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = ['name', 'description_corta', 'description', 'images', 'price_tecnico', 'price_final', 'brand_id', 'taxonomy_id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(Taxonomy::class, 'taxonomy_id');
    }
}
