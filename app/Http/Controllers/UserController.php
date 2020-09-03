<?php


namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
    public function store(Request $request){
        $user = User::create($request->all());
        return response($user);
    }
    public function getUserById($id){
        $user = User::findOrFail($id);
        return response($user);
    }
    function update(Request $request, $id)
    {
        $user= User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user);
    }
    function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(null);
    }
}
