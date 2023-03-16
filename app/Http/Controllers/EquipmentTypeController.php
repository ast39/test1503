<?php

namespace App\Http\Controllers;

use App\Http\Filters\EquipmentTypeFilter;
use App\Http\Requests\EquipmentType\FilterRequest;
use App\Http\Requests\EquipmentType\StoreRequest;
use App\Http\Requests\EquipmentType\UpdateRequest;
use App\Http\Resources\BoolAnswerResource;
use App\Http\Resources\EquipmentTypeResource;
use App\Http\Resources\ErrorResource;
use App\Http\Resources\IntAnswerResource;
use App\Libs\AppError;
use App\Models\EquipmentType;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\JsonResponse;

class EquipmentTypeController extends Controller
{
    /**
     * Добавление типа
     *
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $data          = $request->validated();

        return (new IntAnswerResource([
            'data' => EquipmentType::create($data)->type_id
        ]))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Получение списка типов
     *
     * @param FilterRequest $request
     * @return JsonResponse
     * @throws BindingResolutionException
     */
    public function index(FilterRequest $request): JsonResponse
    {
        $data = $request->validated();

        $filter = app()->make(EquipmentTypeFilter::class, [
            'queryParams' => array_filter($data)
        ]);

        $types = EquipmentType::filter($filter)
            ->paginate($data['paginator'] ?? config('api.listing.etype')) ?: [];

        return EquipmentTypeResource::collection($types)
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Получение типа
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $type = EquipmentType::find($id);
        if (is_null($type)) {
            return (new ErrorResource(new AppError(901)))
                ->response()
                ->setStatusCode(200);
        }

        return (new EquipmentTypeResource($type))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Обновление типа
     *
     * @param UpdateRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, int $id): JsonResponse
    {
        $data = $request->validated();

        $type = EquipmentType::find($id);
        if (is_null($type)) {
            return (new ErrorResource(new AppError(901)))
                ->response()
                ->setStatusCode(200);
        }

        return (new BoolAnswerResource([
            'data' => $type->update($data)
        ]))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Удаление типа
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $type = EquipmentType::find($id);
        if (is_null($type)) {
            return (new ErrorResource(new AppError(901)))
                ->response()
                ->setStatusCode(200);
        }

        return (new BoolAnswerResource([
            'data' => $type->delete()
        ]))
            ->response()
            ->setStatusCode(200);
    }
}
