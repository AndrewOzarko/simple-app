<?php

namespace App\Http\Requests;

use App\Parents\Request;

class GetUserByIdRequest extends Request
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
            'id' => 'required|integer|exists:users,id'
        ];
    }
}
