<?php

namespace App\Swagger\Controllers;

class Auth {

    /**
     *  @OA\Post(
     *     path="/auth/login",
     *     operationId="auth.login",
     *     summary="Авторизация",
     *     description="Авторизация клиента",
     *     tags={"JWT Авторизвция"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Auth data",
     *         @OA\JsonContent(
     *             @OA\Property(property="email", type="string", description="User email", example="test@mail.ru"),
     *             @OA\Property(property="password", type="string", description="User password", example="qwerty12"),
     *         ),
     *     ),
     *     @OA\Response(
     *         response="201",
     *         description="JWT token",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", ref="#/components/schemas/token_response")
     *         )
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. When required parameters were not supplied.",
     *         @OA\JsonContent(ref="#/components/schemas/error_response")
     *     ),
     * ),
     */
    public function login() {}

    /**
     *  @OA\Post(
     *     path="/auth/logout",
     *     operationId="auth.logout",
     *     summary="Логаут",
     *     description="Сбросить авторизацию",
     *     tags={"JWT Авторизвция"},
     *     @OA\Response(
     *         response="200",
     *         description="Action data",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="bool", example="true")
     *         )
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. When required parameters were not supplied.",
     *         @OA\JsonContent(ref="#/components/schemas/error_response")
     *     ),
     *     security={{ "UserToken": {} }}
     * ),
     */
    public function logout() {}

    /**
     *  @OA\Post(
     *     path="/auth/refresh",
     *     operationId="auth.refresh",
     *     summary="Обновление токена",
     *     description="Пролонгирование истекшего токена",
     *     tags={"JWT Авторизвция"},
     *     @OA\Response(
     *         response="201",
     *         description="JWT token",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", ref="#/components/schemas/token_response")
     *         )
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. When required parameters were not supplied.",
     *         @OA\JsonContent(ref="#/components/schemas/error_response")
     *     ),
     *     security={{ "UserToken": {} }}
     * ),
     */
    public function refresh() {}

    /**
     *  @OA\Post(
     *     path="/auth/me",
     *     operationId="auth.me",
     *     summary="Информация обо мне",
     *     description="Информация об авторизованном пользователе",
     *     tags={"JWT Авторизвция"},
     *     @OA\Response(
     *         response="200",
     *         description="User data",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", ref="#/components/schemas/user_response")
     *         )
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. When required parameters were not supplied.",
     *         @OA\JsonContent(ref="#/components/schemas/error_response")
     *     ),
     *     security={{ "UserToken": {} }}
     * ),
     */
    public function me() {}

}
