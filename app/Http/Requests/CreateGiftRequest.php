<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateGiftRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'parent' => 'required|array',
            'parent.model_type' => 'required|string|in:user,gift',
            'parent.model_id' => ['required', 'integer', Rule::exists("{$this->parent['model_type']}s", 'id')]
        ];
    }
}
