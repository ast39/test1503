<?php

namespace App\Swagger\Controllers;

# php artisan l5-swagger:generate

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Equipment Api",
 *      description="Equipment APi для Web-версии",
 *      @OA\Contact(
 *          email="alexandr.statut@gmail.com",
 *          name="ASt"
 *      ),
 * ),
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Main API server"
 * ),
 *
 * @OA\SecurityScheme(
 *     type="http",
 *     description="You can get token after auth in API by your Login / Password",
 *     name="Api Client",
 *     in="header",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     securityScheme="UserToken",
 * ),
 *
 * @OA\ExternalDocumentation(
 *     description="Docs",
 *     url=L5_SWAGGER_CONST_HOST,
 * ),
 *
 * @OA\Tag(
 *     name="JWT Авторизвция",
 *     description="Авторизация в API"
 * ),
 *
 * @OA\Tag(
 *     name="Оборудование",
 *     description="Блок оборудования"
 * ),
 *
 * @OA\Tag(
 *     name="Тип оборудования",
 *     description="Блок типов оборудования"
 * )
 *
 */
class Controller {}
