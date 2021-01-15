<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SystemRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_relations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('system_id')->unique();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('company_id')->nullable();
            $table->boolean('isInCompany');
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
        Schema::dropIfExists('system_relations');
    }
}
