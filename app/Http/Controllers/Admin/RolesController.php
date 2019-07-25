<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleFormRequest;

class RolesController extends Controller
{
    public function create(){
      return view('backend.roles.create');
    }


    public function store(RoleFormRequest $request){
       $roles= new Role(array(
         'name' => $request->get('name'),
         'display_name' => $request->get('display_name'),
         'description' => $request->get('description')
       ));
       $roles->save();

       return redirect('/admin/roles/create')->with('status', 'A new role has been created!');
    }

    public function index(){
      $roles = Role::all();
      return view('backend.roles.index', compact('roles'));
    }
}
