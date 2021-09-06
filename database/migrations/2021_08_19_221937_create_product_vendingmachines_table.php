<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVendingmachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_vending_machine', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('position');
            $table->string('vending_machine_id');
            $table->string('product_id');
            $table->string('number_of_product');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_vendingmachines');
    }
}
