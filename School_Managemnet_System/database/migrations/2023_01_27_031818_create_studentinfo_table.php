<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentinfo', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('gender');
            $table->string('nic');
            $table->string('mobile');
            $table->string('photo', 300);
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
        Schema::dropIfExists('studentinfo');
    }
}
