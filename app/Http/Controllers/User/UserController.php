<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\UserStoreRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User\User;
use App\Services\User\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserUpdateRequest;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /** @var UserService */
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll($this->userService->getAll());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserStoreRequest
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        return $this->showOne($this->userService->store($request->validated()), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $this->showOne($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserUpdateRequest $request
     * @param  \App\Models\User\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        return $this->showOne($this->userService->update($request->validated(), $user), Response::HTTP_OK);
    }

    /**
     * ***-PUT YOUR LOGIC TO DELETE-*** 
     *
     * @param  \App\Models\User\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return $this->showMessage('Success');
    }
}
