<?php


namespace App\Services\User;


use App\Models\User;
use \Illuminate\Contracts\Pagination\LengthAwarePaginator;
class GetAllUsersService
{
    /**
     * @param array $with
     * @return LengthAwarePaginator
     */
    public function run(array $with = []): LengthAwarePaginator
    {
        return User::query()->with($with)->paginate();
    }
}