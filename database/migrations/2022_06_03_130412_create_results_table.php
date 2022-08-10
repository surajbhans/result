<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
            Schema::create('results', function (Blueprint $table) {
                $table->id();
                $table->string("name");
                $table->string("contact");
                $table->string("email");
                $table->float("maths");
                $table->float("sci");
                $table->float("sst");
                $table->float("hindi");
                $table->float("eng");
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
        Schema::dropIfExists('results');
    }
}
