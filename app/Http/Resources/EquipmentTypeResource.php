<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentTypeResource extends JsonResource
{
    public static $wrap = 'data';

    public function toArray($request)
    {
        return [

            'id'         => $this->type_id ?? null,
            'name'       => $this->name    ?? null,
            'mask'       => $this->mask    ?? null,
            'created_at' => date('d-m-Y H:i:s', $this->created_at ?? 0),
            'updated_at' => date('d-m-Y H:i:s', $this->updated_at ?? 0),
        ];
    }
}
