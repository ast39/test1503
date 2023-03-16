<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class EquipmentFilter extends AbstractFilter {

    public const TYPE = 'type_id';

    /**
     * @return array[]
     */
    protected function getCallbacks(): array
    {
        return [
            self::TYPE => [$this, 'type_id'],
        ];
    }

    /**
     * @param Builder $builder
     * @param $value
     * @return void
     */
    public function type_id(Builder $builder, $value): void
    {
        $builder->where('type_id', $value);
    }
}
