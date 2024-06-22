<?php

namespace App\Http\Controllers;

use App\Models\ClientUser;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        $profile= ClientUser::where('id', $id)->get();
        return response()->json($profile);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    public function check(Request $request)
    {
        //
        //return $request;
        if(!Auth::attempt($request->only('email', 'password')))
        {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();
        
        $token = $user->createToken('auth_token')->plainTextToken;

        $uid =  $user->id;
        session_start();
        $_SESSION["uid"] = $uid;

        return response()->json([
            'code' => 200,
            'message' => 'Hi '.$user->name,
            'accessToken' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ]);
    }

}
