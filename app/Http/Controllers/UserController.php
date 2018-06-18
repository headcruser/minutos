<?php

namespace Minuta\Http\Controllers;

use Minuta\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Minuta\Http\Requests\Usuario\CreateUserRequest;
use Minuta\Http\Requests\Usuario\UpdateUserRequest;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = User::all();
        return view('users/index',compact('lista'));
    }

    /**
     * show
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show( User $user) {
        return view('users/show',compact('user'));
    }

    /**
     * Display form to create user
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('users/create');
    }
    /**
     * Create user in database
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $request->crear();
        return redirect()->route('usuarios.index');
    }
    /**
     * Show Form edit to Users
     *
     * @param User $user Edit to user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users/update',['user'=>$user]);
    }
    /**
     * update
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, UpdateUserRequest $request)
    {
        $request->update($user);

        return redirect()->route('usuarios.show',$user);
    }
    /**
     * delete a user in Database
     *
     * @param User $user Delete user
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        $user->delete();

        return redirect()->route('usuarios.index');
    }
}
