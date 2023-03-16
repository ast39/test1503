<?php

namespace App\Swagger\Controllers;

class Equipment {

    /**
     * @OA\Get(
     *   path="/equipment",
     *   operationId="equipment.index",
     *   summary="Список ",
     *   description="Список блоков филиала",
     *   tags={"Оборудование"},
     *   @OA\Parameter(
     *     name="type_id",
     *     in="query",
     *     required=false,
     *     @OA\Schema(
     *       type="integer"
     *     )
     *   ),
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
     *     description="Список оборудования",
     *     @OA\JsonContent(
     *       @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/equipment_response"))
     *     )
     *   ),
     *   @OA\Response(
     *     response="404",
     *     description="Equipments not found",
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
     *     path="/equipment",
     *     operationId="equipment.store",
     *     summary="Добавить оборудование",
     *     description="Добавить оборудование",
     *     tags={"Оборудование"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Данные оборудования",
     *         @OA\JsonContent(
     *             @OA\Property(property="items", type="array", @OA\Items(ref="#/components/schemas/equipment_request")),
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
     *     path="/equipment/{id}",
     *     operationId="equipment.show",
     *     summary="Информация об оборудовании",
     *     description="Инфмармция об оборудовании",
     *     tags={"Оборудование"},
     *     @OA\Parameter(name="id", in="path", description="Type ID", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(
     *         response="200",
     *         description="Информация о типе оборудования",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", ref="#/components/schemas/equipment_response")
     *         )
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Equipment not found",
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
     *     path="/equipment/{id}",
     *     operationId="equipment.update",
     *     summary="Обновить оборудование",
     *     description="Обновить оборудование",
     *     tags={"Оборудование"},
     *     @OA\Parameter(name="id", in="path", description="Type id", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         description="New block data",
     *         @OA\JsonContent(
     *             @OA\Property(property="serial_number", type="string", nullable="true", description="Serial number", example="12345ab"),
     *             @OA\Property(property="description", type="string", nullable="true", description="Comment", example="Some text"),
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
     *         description="Equipment not found",
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
     *     path="/equipment/{id}",
     *     operationId="equipment.destroy",
     *     summary="Удалить оборудование",
     *     description="Удалить оборудование",
     *     tags={"Оборудование"},
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
     *         description="Equipment not found",
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
