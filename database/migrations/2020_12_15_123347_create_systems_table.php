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
            $table->integer('userID')->nullable();
            $table->integer('companyID')->nullable();
            $table->timestamps();
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
