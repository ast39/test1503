<?php

namespace App\Swagger\Models;

/** @OA\Schema(
 *     type="object",
 *     schema="user_response",
 *     title="Сотрудники",
 *     @OA\Property(property="id", type="integer", example="1234"),
 *     @OA\Property(property="name", type="string", example="Some name"),
 * 	   @OA\Property(property="email", type="string", example="test@mail.ru"),
 * 	   @OA\Property(property="email_verified_at", nullable="true", type="integer", example="1234567890"),
 * 	   @OA\Property(property="created_at", type="integer", example="1234567890"),
 * 	   @OA\Property(property="updated_at", type="integer", example="1234567890"),
 *  ),
 */
class UserResponse {}
