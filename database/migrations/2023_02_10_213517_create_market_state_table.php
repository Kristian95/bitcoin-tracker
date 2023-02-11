<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_state', function (Blueprint $table) {
            $table->id();
            $table->decimal('mid');
            $table->decimal('bid');
            $table->decimal('last_price');
            $table->decimal('low');
            $table->decimal('high');
            $table->decimal('volume');

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
        Schema::dropIfExists('market_state');
    }
}
