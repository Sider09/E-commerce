<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('PagoID');
            $table->integer('PedidoID')->unsigned();
            $table->foreign('PedidoID')->references('PedidoID')->on('pedidos');
            $table->dateTime('FechaPago');
            $table->decimal('Monto', 10, 2);
            $table->string('MetodoPago', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
