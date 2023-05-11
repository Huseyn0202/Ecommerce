<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.users.insert_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name=$request->get("name");
        $email=$request->get("email");
        $password=$request->get("password");
        $is_admin=$request->get("is_admin",0);
        $is_active=$request->get("is_active",0);
                
        


        $user = new User();
        $user->name=$name;
        $user->email = $email;
        $user->password=$password;
        $user->is_admin=$is_admin;
        $user->is_active=$is_active;

        $user->save();
        return redirect("/users");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
     return "salam";   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect("/users");
        
    }
}
