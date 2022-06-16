<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Car extends EloquentModel
{
    use HasFactory;

    protected $fillable = ['vin', 'description', 'color', 'price', 'model_id', 'brand_id', 'user_id', 'photo'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function user_id()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilterByVin($query, $vin)
    {
        return $query->where('vin', 'like', '%' . $vin . '%');
    }

    public function scopeFilterByDescription($query, $description)
    {
        return $query->where('description', 'like', '%' . $description . '%');
    }

    public function scopeFilterByColor($query, $color)
    {
        return $query->where('color', 'like', '%' . $color . '%');
    }

    public function scopeFilterByPrice($query, $minPrice)
    {
        return $query->where('price', '>', $minPrice);
    }
}
