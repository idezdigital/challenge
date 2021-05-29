<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Account;
use Illuminate\Http\Request;
use App\Response\BaseResponse;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users = User::all();
        return UserResource::collection($users);
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
    public function store(Request $user)
    {
        try {

            $resp = User::create($user->all());
            return BaseResponse::success(['data' => $resp]);
        } catch (\Exception $e) {

            return BaseResponse::error([], $e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $user, $id)
    {


        $user = User::findOrfail($id);
        $userResource = new UserResource($user, true);
        return $userResource;
    }

    public function showLike($key)
    {
        $user =  User::query()
            ->where('name', 'LIKE', "{$key}%")
            ->get();

        return UserResource::collection($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
