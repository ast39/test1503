<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentResource extends JsonResource
{
    public static $wrap = 'data';

    public function toArray($request)
    {
        return [

            'id'            => $this->eq_id ?? null,
            'type'          => new EquipmentTypeResource($this->equipment_type),
            'serial_number' => $this->serial_number ?? null,
            'description'   => $this->description ?? null,
            'created_at'    => date('d-m-Y H:i:s', $this->created_at ?? 0),
            'updated_at'    => date('d-m-Y H:i:s', $this->updated_at ?? 0),
        ];
    }
}
