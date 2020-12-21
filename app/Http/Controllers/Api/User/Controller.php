<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller as ApiController;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\GetUserByIdRequest;
use App\Http\Resources\UserResource;
use App\Services\User\CreateUserService;
use App\Services\User\GetAllUsersService;
use App\Services\User\GetUserByIdService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Pagination\LengthAwarePaginator;

class Controller extends ApiController
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getAllUsers(): AnonymousResourceCollection
    {
        /** @var LengthAwarePaginator $users */
        $users = (new GetAllUsersService())->run(['gifts']);

        return UserResource::collection($users);
    }

    /**
     * @param GetUserByIdRequest $request
     * @return UserResource
     */
    public function getUserById(GetUserByIdRequest $request): UserResource
    {
        $data = $request->validated();

        $user = (new GetUserByIdService())->run($data['id'], ['gifts']);

        return new UserResource($user);
    }

    /**
     * @param CreateUserRequest $request
     * @return UserResource
     */
    public function createUser(CreateUserRequest $request)
    {
        /** @var array $data */
        $data = $request->validated();

        $user = (new CreateUserService())->run($data);

        return new UserResource($user);
    }
}
