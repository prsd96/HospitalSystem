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
        Schema::create('doctor_mains', function (Blueprint $table) {
            $table->id();
            $table->string('dfirstname');
            $table->string('dlastname');
            $table->integer('dhosp');
            $table->string('dspecial');
            $table->integer('dcontact');
            $table->boolean('dstatus')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('doctor_mains');
    }
};
