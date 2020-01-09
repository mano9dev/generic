<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function login(Request $request)
    {
      # code...
      if (Auth::attempt($request->only(['email','password']))) {
        # code...
        $user= Auth::user();
        $token=$user->createToken('Gen');
        $user->api_token =  $token->accessToken;

        return response(['success' =>'Authorised','user' =>$user]);
        
      }else {

        return response(['error' =>'Unauthorised'],401);
      }
    }

    public function logout()
    {
      $user=Auth::user();
      Auth::logout();
      $user->token()->revoke();

      return response(['logout' =>'successfull logout'], 200);
    }
    public function validateUser($user)
    {
      # code...
      return Validator::make($user,[
        'email' => 'require|email',
        'password' => 'require'
      ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
