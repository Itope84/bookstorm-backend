<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function getSignupPageDate()
    {
        return response()->json(['schools' => \App\School::all(), 'programs' => \App\StudyProgram::all()], 200);
    }

    public function login(Request $request)
    {
        $status = 401;
        $response = ['error' => 'sorry, those credentials don\'t match any of our records'];

        if (Auth::attempt($request->only(['email', 'password']))) {
            $status = 200;
            $response = [
                'user' => Auth::user(),
                'token' => Auth::user()->createToken('bookstorm')->accessToken,
            ];
        }

        return response()->json($response, $status);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'school_id' => 'required|exists:schools,id',
            'study_program_id' => 'required|exists:study_programs,id',
            'level' => 'required|in:100,200,300,400,500,600'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 401);
        }

        $data = $request->only(['name', 'email', 'password', 'school_id', 'study_program_id', 'level']);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        return response()->json([
            'user' => $user,
            'token' => $user->createToken('bookstorm')->accessToken,
        ]);
    }

    public function profile()
    {
        return new UserResource(request()->user());
    }

}
