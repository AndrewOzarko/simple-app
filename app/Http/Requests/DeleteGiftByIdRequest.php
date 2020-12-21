<?php

namespace App\Http\Requests;

use App\Parents\Request;

class DeleteGiftByIdRequest extends Request
{
    protected $urlParameters = ['id'];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|integer|exists:gifts,id'
        ];
    }
}
