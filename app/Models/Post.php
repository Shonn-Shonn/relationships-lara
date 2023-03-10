<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name','user_id','body','like'];

    protected $with = ['comments'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    //default value
//     public function user()
//     {
//         return $this->belongsTo(User::class)->withDefault([
//             'name' => 'Guest Author',
//         ]);
//    }
}
