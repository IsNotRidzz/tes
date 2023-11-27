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
        Schema::create('datakelas', function (Blueprint $table) {
            $table->id();
            $table->string('classX', 50);
            $table->string('roomteacherX', 50);
            $table->string('majorX', 50);
         

            $table->string('classXI', 50);
            $table->string('roomteacherXI', 50);
            $table->string('majorXI', 50);

            $table->string('classXII', 50);
            $table->string('roomteacherXII', 50);
            $table->string('majorXII', 50);

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
        Schema::dropIfExists('datakelas');
    }
};
