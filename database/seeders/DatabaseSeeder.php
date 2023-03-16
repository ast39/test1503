<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        # Создадим первого пользователя
        User::create([
            'name'     => 'Admin',
            'email'    => 'alex@mail.ru',
            'password' => '$2y$10$O74StzesDDEi5.fMjmLEnO3k2vbLIcagHPCTPnBXp9.BdDiN9Im1y', // qwerty
        ]);

        # Заполним справочник "Типы оборудования"
        $this->call(EquipmentTypeSeeder::class);

        # Заполним справочник "Список оборудования"
        $this->call(EquipmentSeeder::class);
    }
}
