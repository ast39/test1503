<?php

namespace App\Http\Requests\Equipment;

use App\Http\Requests\ApiFormRequest;

class StoreRequest extends ApiFormRequest
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
            'items'                 => 'required|array',
            'items.*.type_id'       => 'required|integer',
            'items.*.serial_number' => 'required|string|regex:/(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{10}/|unique:equipments',
            'items.*.description'   => 'string',
        ];
    }
}
