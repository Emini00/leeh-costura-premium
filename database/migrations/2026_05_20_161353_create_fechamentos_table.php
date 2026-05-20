<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fechamentos', function (Blueprint $table) {

            $table->id();

            $table->foreignId('funcionario_id')
                ->constrained()
                ->onDelete('cascade');

            $table->integer('quantidade_sofas')->default(0);

            $table->decimal('valor_bruto', 10, 2)->default(0);

            $table->decimal('desconto', 10, 2)->default(0);

            $table->string('motivo_desconto')->nullable();

            $table->decimal('acrescimo', 10, 2)->default(0);

            $table->string('motivo_acrescimo')->nullable();

            $table->decimal('valor_total', 10, 2)->default(0);

            $table->text('observacoes')->nullable();

            $table->boolean('pago')->default(false);

            $table->date('data_fechamento')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fechamentos');

    }
};
