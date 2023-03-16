<?php

namespace App\Swagger\Models;

/** @OA\Schema(
 *     type="object",
 *     schema="equipment_response",
 *     title="Оборудование",
 *     @OA\Property(property="eq_id", type="integer", example="1234"),
 *     @OA\Property(property="type_id", ref="#/components/schemas/equipment_type_response"),
 * 	   @OA\Property(property="serial_number", type="string", example="Some serial number"),
 * 	   @OA\Property(property="description", type="string", example="Some text"),
 * 	   @OA\Property(property="created_at", type="integer", example="1234567890"),
 * 	   @OA\Property(property="updated_at", type="integer", example="1234567890"),
 *  ),
 */
class EquipmentResponse {}
