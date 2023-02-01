<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function items()
    {
        return $this->hasManyThrough(Item::class, Type::class, 'category_id', 'type_id', 'id', 'id');
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}

