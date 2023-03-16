<?php

namespace App\Swagger\Models;

/** @OA\Schema(
 *     type="object",
 *     schema="token_response",
 *     title="JWT токен авторизации",
 *     @OA\Property(property="access_token", type="string", example="eyJ0eXAiOiJKV1QiL"),
 * 	   @OA\Property(property="token_type", type="string", example="bearer"),
 * 	   @OA\Property(property="expires_in", type="integer", example="3600"),
 * )
 */
class TokenResponse {}
