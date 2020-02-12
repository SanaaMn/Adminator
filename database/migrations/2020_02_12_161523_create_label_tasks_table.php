<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabelTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('label_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('task_id');
            $table->unsignedInteger('label_id');
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
        Schema::dropIfExists('label_tasks');
    }
}
