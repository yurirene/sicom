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
        Schema::create('documentos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome');
            $table->integer('numero');
            $table->tinyInteger('tipo')->default(1)->comment('1 - Relatório, 2 - Proposta, 3 - Consulta, 4 - Substitutivo, 5 - Relatório da Comissão, 6 - Outros');
            $table->string('url');
            $table->foreignUuid('delegado_id')->constrained('delegados')->onDelete('cascade')->nullable();
            $table->foreignUuid('comissao_id')->constrained('comissoes')->onDelete('cascade')->nullable();
            $table->foreignUuid('unidade_id')->constrained('unidades')->onDelete('cascade')->nullable();
            $table->uuid('reuniao_id');
            $table->uuid('tenant_id');
            $table->timestamps();

            $table->index('reuniao_id');
            $table->index('tenant_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
