<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function register(Request $request){
        $validated = Validator::make($request-> all(), [
            'username' => 'required|unique:App\Models\User,username|max:255',
            'email' => 'required|unique:App\Models\User,email|max:255',
            'password' =>'required',
        ]);

        if ($validated->fails()) {
            return  response('Korisnik vec postoji', 400)->header('Content-Type', 'application/json');
        }

        $user=User::create(['username' => $request->username,'email'=>$request->email,'password'=>$request->password]);

        return response($user,204);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $user = User::find($user_id);
        if(is_null($user)){
            return response()->json('Data not found',404);
        }
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        //
    }

    public function login(Request $request){
        
        $user = User::where('email', $request->email)->where('password', $request->password)->first();
       if($user == null){
        return response()->json(['message' => 'Unauthorized'],401);
       }


        //$token = $user->createToken('auth_token')->plainTextToken;

        
        return response()->json(['message' => 'Hi '.$user->username.', welcome to home',  ]);
    
    }
    public function login2(Request $request){
        
        
       $user = User::where('email', $request->email)->where('password', $request->password)->first();
       if($user == null){
        return response()->json(['message' => 'Unauthorized'],401);
       }


        //$token = $user->createToken('auth_token')->plainTextToken;

        
        return response()->json(['message' => 'Hi '.$user->username.', welcome to home',  ]);
    
    }
}
