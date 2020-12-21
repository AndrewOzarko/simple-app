<?php


namespace App\Services\Gift;


use App\Models\Gift;

class CreateGiftService
{
    /**
     * @param array $data
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function run(array $data)
    {
        return Gift::query()->create($data);
    }
}