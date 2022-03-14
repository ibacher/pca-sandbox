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
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('municipality', 100)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('postal_code', 50)->nullable();
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
        Schema::dropIfExists('facilities');
    }
};
