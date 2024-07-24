<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('ID_Client');
            $table->string('Client_Name', 200)->nullable(false);
            $table->string('Client_Address', 200)->nullable(false);
            $table->enum('Category', [
                'Financial Service Industry',
                'Government',
                'Hospital',
                'Education',
                'Hotel',
                'Military',
                'Private'
            ])->nullable(false);
            $table->timestamps();
        });
    }

    public function down()
    {

        Schema::dropIfExists('clients');
    }
}
