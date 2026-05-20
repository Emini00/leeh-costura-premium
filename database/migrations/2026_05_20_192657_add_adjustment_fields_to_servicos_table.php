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

    $table->decimal('desconto', 10, 2)
        ->default(0);

    $table->string('motivo_desconto')
        ->nullable();

    $table->decimal('acrescimo', 10, 2)
        ->default(0);

    $table->string('motivo_acrescimo')
        ->nullable();

    $table->decimal('valor_final', 10, 2)
        ->default(0);


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('servicos', function (Blueprint $table) {

    $table->dropColumn([

        'desconto',

        'motivo_desconto',

        'acrescimo',

        'motivo_acrescimo',

        'valor_final',

    ]);

});
    }
};
