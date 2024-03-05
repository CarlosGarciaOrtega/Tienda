<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritocompra', function (Blueprint $table) {
        
        $table->id();
        $table->foreignId('idusuario')->constrained('users')->onDelete('cascade');
        $table->foreignId('idproducto')->constrained('producto')->onDelete('cascade');
        $table->integer('cantidad');
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
        Schema::dropIfExists('carrito_compras');
    }
};