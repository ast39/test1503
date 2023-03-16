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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id('eq_id');
            $table->unsignedInteger('type_id');
            $table->string('serial_number')->unique('sn');
            $table->text('description')
                ->nullable();

            $table->timestamps();

            $table->softDeletes();

            $table->comment('Список оборудования');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipments');
    }
};
