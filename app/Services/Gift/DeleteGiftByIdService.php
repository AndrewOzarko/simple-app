<?php


namespace App\Services\Gift;


use App\Models\Gift;

class DeleteGiftByIdService
{
    public function run(int $id)
    {
        /** @var Gift $gift */
        $gift = Gift::query()->find($id);

        $gift->delete();

        return $gift;
    }
}