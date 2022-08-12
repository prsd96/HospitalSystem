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
        Schema::create('patient_mains', function (Blueprint $table) {
            $table->id();
            $table->string('pfirstname');
            $table->string('plastname');
            $table->integer('phosp');
            $table->integer('pdoc');
            $table->integer('pcontact');
            $table->date('admitdate');
            $table->date('dischargedate')->nullable()->default(null);
            $table->boolean('pstatus')->default(true);
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
        Schema::dropIfExists('patient_mains');
    }
};
