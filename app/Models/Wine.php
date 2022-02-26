<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    public $fillable = ['name','fruitType'];

    public function wineType()
    {
        return $this->hasMany(WineType::class, 'wine', 'id')
            ->orderBy('type','ASC');
    }
}
