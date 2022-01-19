<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIgreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igre', function (Blueprint $table) {
            $table->foreignID('id_turniri')->nullable()->constrained('turniri')->onDelete('cascade');
            $table->foreignID('id_igraci')->nullable()->constrained('igraci')->onDelete('cascade');
            $table->date('kada');

            $table->primary(['id_turniri', 'id_igraci']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('igre');
    }
}
