<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manager_id')->unsigned();
            $table->integer('estimator_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('netsuite_id')->unsigned();
            $table->integer('region_id')->unsigned();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('details')->nullable();
            $table->text('services')->nullable();
            $table->text('materials')->nullable();
            $table->text('documents')->nullable();
            $table->text('labor')->nullable();
            $table->text('equipments')->nullable();
            $table->bigInteger('status')->default(0);
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('schedule_at')->nullable();
            $table->timestamp('complete_at')->nullable();
            $table->timestamp('finished_at')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
