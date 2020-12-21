<?php


namespace App\Services\User;


use App\Models\User;

class CreateUserService
{
    /**
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function run(array $data)
    {
        return User::query()->create($data);
    }
}