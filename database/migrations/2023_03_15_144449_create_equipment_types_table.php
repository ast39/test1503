<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('name');
            $table->string('mask');

            $table->timestamps();

            $table->softDeletes();

            $table->comment('Типы оборудования');
        });

        Schema::table('equipments', function(Blueprint $table) {
            $table->foreign('type_id', 'eq_type')
                ->references('type_id')
                ->on('equipment_types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment_types');
    }
};
