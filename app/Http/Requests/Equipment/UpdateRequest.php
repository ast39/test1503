<?php

namespace App\Http\Requests\Equipment;

use App\Http\Requests\ApiFormRequest;

class UpdateRequest extends ApiFormRequest
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
            'type_id'       => 'integer',
            'serial_number' => 'string|regex:/(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{10}/|unique:equipments,serial_number,' . $this->equipment . ',eq_id',
            'description'   => 'string',
        ];
    }
}
