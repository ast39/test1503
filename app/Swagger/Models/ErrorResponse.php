<?php


namespace App\Swagger\Models;

/** @OA\Schema(
 *     type="object",
 *     schema="error_response",
 *     title="Ошибка",
 *     @OA\Property(property="error", type="object",
 * 	       @OA\Property(property="app", type="string", example="Risk Api"),
 *         @OA\Property(property="code", type="integer", example="900"),
 *         @OA\Property(property="msg", type="string", example="Bad request"),
 *     )
 * )
 */
class ErrorResponse {}
