<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return view('layouts.user.list_user', compact('users'));
    }

    public function create()
    {
        return view('layouts.user.create_user');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'role'=>'required'
        ]);

        $input = new User;
        $input->name=$request->name;
        $input->email=$request->email;
        $input->password=bcrypt($request->password);
        $input->role=$request->role;
        $input->save();
        
        return redirect()->route('user.index')->with('status','Cadastrado com sucesso.');
    }

    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('status','Removido com sucesso.');
    }
}
