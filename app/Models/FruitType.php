<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FruitType extends Model
{
    use HasFactory;

    public $fillable = ['name','fruit'];

    public function wine()
    {
        return $this->hasMany(Wine::class, 'fruitType', 'id');
    }
}
