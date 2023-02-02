<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Phone;
use App\Models\Project;
use Illuminate\Http\Request;

class TestingController extends Controller
{
      public function userPhone(User $user,Phone $phone)
      {
            $phone = Phone::find(1);
            $user = User::find(1);
            dd($user->phone->toArray());
      }

      public function userRoles(User $user,Request $request)
      {
            $user = User::find($request->id);
            dd($user->roles->toArray());
      }

      public function roleUsers(User $user,Request $request)
      {
            $role = Role::find($request->id);
            dd($role->users->toArray());
      }

      public function addUserRoles(User $user,Request $request)
      {
            $user = User::find($request->id);
            $addRole = $request->role_id;
            $user->roles()->sync([1,2,3]);
            dd($user->roles->toArray());
      }

      public  function projectDeployments(Project $project, Request $request)
      {
            $project = Project::find($request->id);
            dd($project->deployments->toArray());
      }
}


