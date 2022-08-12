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
        Schema::create('hospital_mains', function (Blueprint $table) {
            $table->id();
            $table->string('hname');
            $table->string('hlogo');
            $table->string('hlocation');
            $table->integer('hstaffcount');
            $table->boolean('hstatus')->default(true);
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
        Schema::dropIfExists('hospital_mains');
    }
};
