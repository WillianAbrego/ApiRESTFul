<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateRequest;
use App\Http\Requests\User\DeleteRequest;
use App\Http\Requests\User\IndexRequest;
use App\Http\Requests\User\ShowRequest;
use App\Http\Requests\User\UpdateRequest;
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

    public function show(ShowRequest $request)
    {
        $user = User::findOrFail($request->user_id);
        return new UserResource($user);
    }

    public function update(UpdateRequest $request)
    {
        $user = User::findOrFail($request->user_id);
        $user = $user->updateModel($request);
        return new UserResource($user);
    }

    public function delete(DeleteRequest $request)
    {
        $user = User::findOrFail($request->user_id);
        //$user->delete();

        $status = $user->deleteModel();

        return response()->json([
            'status' => $status,
            'user' => $user
        ]);
    }
}
