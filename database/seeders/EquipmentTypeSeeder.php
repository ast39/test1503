<?php

namespace Database\Seeders;

use App\Models\EquipmentType;
use Illuminate\Database\Seeder;

class EquipmentTypeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EquipmentType::create([
            'name' => 'Роутер',
            'mask' => 'ASX-543@z2',
        ]);
        EquipmentType::create([
            'name' => 'Точка доступа',
            'mask' => 'FTR-032@p5',
        ]);
        EquipmentType::create([
            'name' => '4G модеи',
            'mask' => 'JWT-476@t4',
        ]);
    }
}
