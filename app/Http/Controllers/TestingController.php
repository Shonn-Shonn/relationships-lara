<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class TestingController extends Controller
{
      public function userPhone(User $user,Phone $phone)
      {
            $phone = Phone::find(1);
            $user = User::find(1);
            dd($user->phone->toArray());
      }
}


