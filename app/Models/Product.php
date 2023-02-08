<?php

namespace App\Models;

use App\Enums\ProductEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','body','status'];

    protected $casts = [
        'status' => ProductEnum::class
    ];
}
