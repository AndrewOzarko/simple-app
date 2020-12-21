<?php

namespace App\Http\Controllers\Api\Gift;

use App\Http\Controllers\Controller as ApiController;
use App\Http\Requests\CreateGiftRequest;
use App\Http\Requests\DeleteGiftByIdRequest;
use App\Http\Resources\GiftResource;
use App\Models\Gift;
use App\Services\Gift\CreateGiftService;
use App\Services\Gift\DeleteGiftByIdService;

class Controller extends ApiController
{
    public function createGift(CreateGiftRequest $request)
    {
        /** @var array $data */
        $data = $request->validated();

        $gift = (new CreateGiftService())->run(array_merge($data['parent'], ['name' => $data['name']]));

        return new GiftResource($gift);
    }

    public function deleteGiftById(DeleteGiftByIdRequest $request)
    {
        $data = $request->validated();

        /** @var Gift $gift */
        $gift = (new DeleteGiftByIdService())->run($data['id']);

        return new GiftResource($gift);
    }
}
