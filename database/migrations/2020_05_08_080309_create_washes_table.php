<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('washes', function (Blueprint $table) {
            $table->id();
            $table->text('Description');
            $table->text('Clientid');
             $table->text('Storeid')->nullable();
            $table->text('Driverid')->nullable();
             $table->text('Status');
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
        Schema::dropIfExists('washes');
    }
}
