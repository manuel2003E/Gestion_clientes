<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditosTable extends Migration
{
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->decimal('monto', 10, 2);
            $table->decimal('interes', 5, 2);
            $table->date('fecha_credito');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('creditos');
    }
}
