<?php

namespace App\Http\Requests\Equipment;

use App\Http\Requests\ApiFormRequest;

class FilterRequest extends ApiFormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'page'    => 'integer',
            'type_id' => 'integer',
        ];
    }
}
