<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->text('img');
            $table->text('adresread');
            $table->text('address');
            $table->text('text');
            $table->text('img2');
            $table->text('img3');
            $table->text('address2');
            $table->text('address3');
            $table->text('text2');
            $table->text('text3');
            $table->string('lang');
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocks');
    }
}
