<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class EquipmentTypeFilter extends AbstractFilter {

    public const TEST = 'test';

    /**
     * @return array[]
     */
    protected function getCallbacks(): array
    {
        return [
            self::TEST => 'test',
        ];
    }

    /**
     * @param Builder $builder
     * @param $value
     * @return void
     */
    public function test(Builder $builder, $value): void
    {
//        $builder->where('test', $value);
    }
}
