<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $userservice; 

    public function __construct(UserService $userService)
    {
        $this->userservice = $userService;
    }

    public function index()
    {
        return view('users.index');
    }

    public function search(Request $request)
    {
        try{
            $user = $this->userservice->search($request->input('user_id'));
        }catch(ModelNotFoundException $exception){
            report($exception);
            return back()->withError($exception->getMessage())->withInput();
        }

        return view('users.search',compact('user'));
    }

    public function show()
    {
        $user = DB::select('select * from users where id = :id', ['id' => 3]);

        dd($user);
    }

    public function insert()
    {
        DB::insert('insert into users (name,email,password) values (?,?,?)',['Khin Khin','khinkhin23@gmail.com','khin12345']);

        dd(User::all());

    }


}
