<?php


namespace App\Services\User;


use App\Models\User;

class GetUserByIdService
{
    /**
     * @param int $id
     * @param array $with
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function run(int $id, array $with = [])
    {
        return User::query()->with($with)->find($id);
    }
}