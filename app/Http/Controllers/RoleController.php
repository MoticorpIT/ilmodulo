<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /** CHECK IF USER IS LOGGED IN */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** SHOW TABLE OF ALL ROLES (INDEX) */
    public function index()
    {
        $roles = Role::orderBy('created_at', 'desc')->get();
        return view('admin.roles.index', compact('roles'));
    }


    /** CREATE NEW ROLE FORM (CREATE) */
    public function create()
    {
        return view('admin.roles.create');
    }


    /** SAVE NEW ROLE TO DATABASE (STORE) */
    public function store()
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required'
        ]);
        /* CREATE AND SAVE NEW ROLE TO DATABASE */
        Role::create([
            'name' => request('name')
        ]);
        /* REDIRECT ROLE AFTER SAVE */
        session()->flash('message', 'Role Added Successfully');
        return redirect()->route('roles.index');
    }


    /** EDIT A ROLE FORM (EDIT) */
    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }


    /** SAVE EDITED ROLE TO DATABASE (UPDATE) */
    public function update(Request $request, Role $role)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $data = $request->validate([
            'name' => 'required'
        ]);
        /* SAVE VALIDATED DATA TO DATABASE */
        $role->fill($data);
        $role->save();
        /* CONFIRM UPDATE AND REDIRECT USER */
        if(!$role->save()) {
            session()->flash('message', 'Contact Manager. ERROR: Role did not update');
        } else {
            session()->flash('message', 'Role Updated Successfully');
        }
        return redirect()->route('roles.index');
    }
}
