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
        Schema::table('servicos', function (Blueprint $table) {

    $table->string('nome_sofa')->nullable();

    $table->string('modelo')->nullable();

    $table->string('cor')->nullable();

    $table->string('tecido')->nullable();

    $table->decimal('valor_unitario', 10, 2)->nullable();

    $table->text('observacoes')->nullable();

    $table->date('data_entrega')->nullable();

});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('servicos', function (Blueprint $table) {

    $table->dropColumn([
        'nome_sofa',
        'modelo',
        'cor',
        'tecido',
        'valor_unitario',
        'observacoes',
        'data_entrega'
    ]);

});
    }
};
