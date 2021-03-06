<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems', function (Blueprint $table) {

            $table->id();
            $table->String('name');
            $table->String('type');
            $table->String('description');
            $table->timestamps();
            $table->integer('userID')->nullable();
            $table->integer('companyID')->nullable();
            $table->double('latitude');
            $table->double('longitude');
          
        });
        //$seeder= new \Database\Seeders\SystemSeeder();
        //$seeder->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systems');
    }
}
