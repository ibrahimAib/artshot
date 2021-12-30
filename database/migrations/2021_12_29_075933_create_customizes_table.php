<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customizes', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->default(null);
            $table->string('small-logo')->default(null);
            $table->string('hf-color')->default('#b8b8b8');
            $table->string('bg-color')->default('#ededed');
            $table->string('f-color')->default('#ededed');
            $table->string('nf-color')->default('#262626');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customizes');
    }
}
