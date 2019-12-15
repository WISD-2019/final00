<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdoptionApplicaitonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('member_id');
            $table->integer('animal_id');
            $table->integer('evaluator_id');
            $table->integer('approver_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adoption_applicaitons');
    }
}
