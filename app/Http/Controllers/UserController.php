<?php

namespace Minuta\Http\Controllers;

use Minuta\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show List user
     *
     * @return void
     */
    public function index()
    {
        $lista = User::all();
         return view('users/index',compact('lista'));
    }

    public function show( User $user) {
        $user = User::findOrFail($user->id);
        return view('users/show',compact('user'));
    }

    /**
     * Display form to create user
     *
     * @return void
     */
    public function create()
    {
         return view('users/create');
    }
    /**
     * Create user in database
     *
     * @return void
     */
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ],[
            'name.required' => 'El Campo nombre es obligatorio',
            'email.required' => 'El Campo email es obligatorio',
            'password.required' => 'El Campo password es obligatorio'
        ]);
        User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => bcrypt($data['password'])
        ]);
        return redirect()->route('usuarios.index');
    }
    /**
     * Show Form edit to Users
     *
     * @param User $user Edit to user
     * @return void
     */
    public function edit(User $user)
    {
        return view('users/update',['user'=>$user]);
    }
    /**
     * update
     *
     * @param User $user
     * @return void
     */
    public function update(User $user)
    {
        $data = request()->validate([
            'name'      =>'required',
            'email'     =>'required|email',
            'password'  =>''
        ]);

        $data['password'] = bcrypt($data['password']);
        $user->update($data);
        return redirect()->route('usuarios.show',$user);
    }
    /**
     * delete a user in Database
     *
     * @param User $user Delete user
     * @return void
     */
    public function delete(User $user){
        $user->delete();
        return redirect()->route('usuarios.index');
    }
}
