<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserProfile;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    { 
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('Personal Access Token')->accessToken;
            return response()->json(['accessToken' => $token, 'user' => $user], 200);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }

    public function signup(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]);
    
            $user = User::create([
                'privileges_id' => '2',
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'email' => $validatedData['email'],
                'email_verified_at' => now(),
                'password' => Hash::make($validatedData['password']),
            ]);
    
            return response()->json(['user' => $user], 201);
        }catch(ValidationException $e){
            return response()->json(['errors' => $e->errors()], 422);
        }catch(Exception $e){
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
        }
        
    
    public function index($id)
    {
        //
        // $profile= ClientUser::where('id', $id)->get();
        // return response()->json($profile);

        $profile= User::find($id);
        return response()->json($profile);
    }

public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'users_id' => 'required|exists:users,id',
            'sleep_hours' => 'required|numeric',
            'physical_activity' => 'required|numeric',
            'health_issues' => 'required|string',
            'stress' => 'required|numeric',
            'specific_diet' => 'required|string',
            'aditional_info' => 'required|string',
        ]);

        $userProfile = UserProfile::create($validatedData);

        return response()->json(['userProfile' => $userProfile], 201);
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
}
