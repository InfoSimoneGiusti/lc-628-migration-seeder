<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('room_number');
            $table->unsignedSmallInteger('square_meters');
            $table->string('floor', 30);
            $table->text('description')->nullable();
            $table->string('address', 200);
            $table->string('city', 50);
            $table->string('province', 2);
            $table->string('zip', 5);
            $table->decimal('price', 9,2)->default(0);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('houses');
    }
};
