<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaborateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('civility');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('address');
            $table->unsignedInteger('postal_code');
            $table->string('city');
            $table->decimal('phone',10,0)->nullable();
            $table->string('email');
            $table->string('company_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborateurs');
    }
}
