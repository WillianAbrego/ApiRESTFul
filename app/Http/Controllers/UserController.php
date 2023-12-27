<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateRequest;
use App\Http\Requests\User\IndexRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function index(IndexRequest $request)
    {
        return UserResource::collection(User::all());
    }

    public function create(CreateRequest $request)
    {
        $user = new User;

        $user = $user->createModel($request);

        return new UserResource($user);
    }
}
