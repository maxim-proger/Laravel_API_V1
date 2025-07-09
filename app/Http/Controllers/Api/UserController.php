<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $rules = [
            'email' => ['required', 'unique:users', 'email', 'max:255'],
            'gender' => ['required', 'max:1', 'in:m,f'],
            'password' => ['required', 'max:255'],
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response($errors, 422);
        }

        else {
            $user = User::create($request->all());
            return (
            [
                'user_id' =>$user->id,
            ]
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $rules = [
            'id' => ['required', 'integer', 'numeric']
        ];
        $validator = Validator::make(['id' => $id], $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response($errors, 422);
        }

        else {
            $user = User::find($id);
            return new UserResource($user);
        }
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
