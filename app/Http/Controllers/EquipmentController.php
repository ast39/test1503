<?php

namespace App\Http\Controllers;

use App\Http\Filters\EquipmentFilter;
use App\Http\Requests\Equipment\FilterRequest;
use App\Http\Requests\Equipment\StoreRequest;
use App\Http\Requests\Equipment\UpdateRequest;
use App\Http\Resources\BoolAnswerResource;
use App\Http\Resources\EquipmentResource;
use App\Http\Resources\ErrorResource;
use App\Http\Resources\IntAnswerResource;
use App\Libs\AppError;
use App\Models\Equipment;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\JsonResponse;

class EquipmentController extends Controller {

    /**
     * Добавление оборудования
     *
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $data = $request->validated();

        return (new BoolAnswerResource([
            'data' => Equipment::insert($data['items'])
        ]))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Получение списка оборудования
     *
     * @param FilterRequest $request
     * @return JsonResponse
     * @throws BindingResolutionException
     */
    public function index(FilterRequest $request): JsonResponse
    {
        $data = $request->validated();

        $filter = app()->make(EquipmentFilter::class, [
            'queryParams' => array_filter($data)
        ]);

        $equipments = Equipment::filter($filter)
            ->paginate($data['paginator'] ?? config('api.listing.$equipment')) ?: [];

        return EquipmentResource::collection($equipments)
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Получение оборудования
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $equipment = Equipment::find($id);
        if (is_null($equipment)) {
            return (new ErrorResource(new AppError(902)))
                ->response()
                ->setStatusCode(200);
        }

        return (new EquipmentResource($equipment))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Обновление оборудования
     *
     * @param UpdateRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, int $id): JsonResponse
    {
        $data = $request->validated();

        $equipment = Equipment::find($id);
        if (is_null($equipment)) {
            return (new ErrorResource(new AppError(902)))
                ->response()
                ->setStatusCode(200);
        }

        return (new BoolAnswerResource([
            'data' => $equipment->update($data)
        ]))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Удаление оборудования
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $equipment = Equipment::find($id);
        if (is_null($equipment)) {
            return (new ErrorResource(new AppError(902)))
                ->response()
                ->setStatusCode(200);
        }

        return (new BoolAnswerResource([
            'data' => $equipment->delete()
        ]))
            ->response()
            ->setStatusCode(200);
    }
}
