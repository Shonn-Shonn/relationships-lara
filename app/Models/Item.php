<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'type_id'];


    public function types()
    {
        return $this->belongsTo(Type::class,'type_id','id');
    }
}
