<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'email'=>$request->input('email'),
        ]);
        return redirect('users')->with('success', 'Usuario creado correctamente');
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect('users')->with('success', 'Usuario eliminado correctamente');;

    }
}
