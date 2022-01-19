<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurniriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turniri', function (Blueprint $table) {
            $table->id();
            $table->string('ime_turnira', 50);
            $table->date('vrijeme_odrzavanja');
            $table->string('vrsta_podloge', 50);
            $table->string('lokacija', 50);
            $table->foreignId('id_kategorije_turnira')->constrained('kategorije_turnira')->onDelete('cascade');
            $table->foreignId('id_rezultati')->constrained('rezultati')->onDelete('cascade');
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
        Schema::dropIfExists('turniri');
    }
}
