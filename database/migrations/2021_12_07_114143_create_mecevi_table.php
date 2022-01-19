<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeceviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mecevi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_igrac');
            $table->foreignId('id_turniri')->constrained('turniri')->onDelete('cascade');
            $table->string('runda', 50);
            $table->string('rezultat', 50);
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
        Schema::dropIfExists('mecevi');
    }
}
