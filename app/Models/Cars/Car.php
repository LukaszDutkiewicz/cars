<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Car extends EloquentModel
{
    use HasFactory;

    public function scopeFilterByVin($query, $vin)
    {
        return $query->where('vin', 'like', '%' . $vin . '%');
    }

    public function scopeFilterByModel($query, $model)
    {
        return $query->where('model', 'like', '%' . $model . '%');
    }
    public function scopeFilterByDescription($query, $description)
    {
        return $query->where('description', 'like', '%' . $description . '%');
    }

    public function scopeFilterByColor($query, $color)
    {
        return $query->where('color', 'like', '%' . $color . '%');
    }

    public function scopeFilterByprice($query, $minPrice)
    {
        return $query->where('price', '>', $minPrice);
    }
}
