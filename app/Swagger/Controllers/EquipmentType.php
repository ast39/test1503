<?php

namespace App\Swagger\Controllers;

class EquipmentType {

    /**
     * @OA\Get(
     *   path="/etype",
     *   operationId="etype.index",
     *   summary="Список ",
     *   description="Список блоков филиала",
     *   tags={"Тип оборудования"},
     *   @OA\Parameter(
     *     name="page",
     *     in="query",
     *     required=false,
     *     @OA\Schema(
     *       type="integer"
     *     )
     *   ),
     *   @OA\Response(
     *     response="200",
     *     description="Список типов оборудования",
     *     @OA\JsonContent(
     *       @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/equipment_type_response"))
     *     )
     *   ),
     *   @OA\Response(
     *     response="404",
     *     description="Types not found",
     *     @OA\JsonContent(ref="#/components/schemas/error_response")
     *   ),
     *   @OA\Response(
     *     response="400",
     *     description="Error: Bad request. When required parameters were not supplied.",
     *     @OA\JsonContent(ref="#/components/schemas/error_response")
     *   ),
     *     security={{ "UserToken": {} }}
     * ),
     */
    public function index() {}

    /**
     *  @OA\Post(
     *     path="/etype",
     *     operationId="etype.store",
     *     summary="Добавить тип оборудования",
     *     description="Добавить тип оборудования",
     *     tags={"Тип оборудования"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Данные типа оборудования",
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", description="Type title", example="Some title"),
     *             @OA\Property(property="mask", type="string", description="Mask", example="xxxxx"),
     *         ),
     *     ),
     *     @OA\Response(
     *         response="201",
     *         description="Record ID",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="integer", example="4554")
     *         )
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. When required parameters were not supplied.",
     *        @OA\JsonContent(ref="#/components/schemas/error_response")
     *     ),
     *     security={{ "UserToken": {} }}
     * ),
     */
    public function create() {}

    /**
     *  @OA\Get(
     *     path="/etype/{id}",
     *     operationId="etype.show",
     *     summary="Информация о типе оборудования",
     *     description="Инфмармция о типе оборудования",
     *     tags={"Тип оборудования"},
     *     @OA\Parameter(name="id", in="path", description="Type ID", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(
     *         response="200",
     *         description="Информация о типе оборудования",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", ref="#/components/schemas/equipment_type_response")
     *         )
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Type not found",
     *         @OA\JsonContent(ref="#/components/schemas/error_response")
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. When required parameters were not supplied.",
     *         @OA\JsonContent(ref="#/components/schemas/error_response")
     *     ),
     *     security={{ "UserToken": {} }}
     * ),
     */
    public function show() {}

    /**
     *  @OA\Put(
     *     path="/etype/{id}",
     *     operationId="etype.update",
     *     summary="Обновить тип оборудования",
     *     description="Обновить тип оборудования",
     *     tags={"Тип оборудования"},
     *     @OA\Parameter(name="id", in="path", description="Type id", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         description="New block data",
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", nullable="true", description="Type title", example="Some title"),
     *             @OA\Property(property="mask", type="string", nullable="true", description="Mask", example="xxxxx"),
     *         ),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Update result",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="bool", example="true")
     *         )
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Type not found",
     *         @OA\JsonContent(ref="#/components/schemas/error_response")
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. When required parameters were not supplied.",
     *         @OA\JsonContent(ref="#/components/schemas/error_response")
     *     ),
     *     security={{ "UserToken": {} }}
     * ),
     */
    public function update() {}

    /**
     *  @OA\Delete(
     *     path="/etype/{id}",
     *     operationId="etype.destroy",
     *     summary="Удалить тип оборудования",
     *     description="Удалить тип оборудования",
     *     tags={"Тип оборудования"},
     *     @OA\Parameter(name="id", in="path", description="Type id", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(
     *         response="200",
     *         description="Destroy result",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="bool", example="true")
     *         )
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Type not found",
     *         @OA\JsonContent(ref="#/components/schemas/error_response")
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="There are some active events in this stream OR Error: Bad request. When required parameters were not supplied.",
     *         @OA\JsonContent(ref="#/components/schemas/error_response")
     *     ),
     *     security={{ "UserToken": {} }}
     * ),
     */
    public function destroy() {}

}
