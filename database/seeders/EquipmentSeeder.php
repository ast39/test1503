<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipment::create([
            'type_id'       => 1,
            'serial_number' => '1000101',
            'description'   => 'TP-Link 1',
        ]);
        Equipment::create([
            'type_id'       => 1,
            'serial_number' => '1000102',
            'description'   => 'D-Link 2',
        ]);
        Equipment::create([
            'type_id'       => 1,
            'serial_number' => '1000103',
            'description'   => 'Zyxel 3',
        ]);
        Equipment::create([
            'type_id'       => 2,
            'serial_number' => '2000101',
            'description'   => 'Asus 4',
        ]);
        Equipment::create([
            'type_id'       => 2,
            'serial_number' => '2000102',
            'description'   => 'Mikrotik 5',
        ]);
        Equipment::create([
            'type_id'       => 3,
            'serial_number' => '3000101',
            'description'   => 'MTS 6',
        ]);
    }
}
