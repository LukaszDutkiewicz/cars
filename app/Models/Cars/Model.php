<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    use HasFactory;

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function scopeFilterByName($query, $name)
    {
        return $query->where('name', 'like', '%' . $name . '%');
    }
}
