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
        Schema::create('carros', function (Blueprint $table) {
            $table->id('id')->comment('ID');
            $table->string('marca', 30);
			$table->string('modelo', 30);
			$table->char('ano', 4);
            $table->char('ano_modelo', 4)->nullable();
			$table->char('km', 7)->nullable()->comment('quilometragem');;
			$table->string('tipo_combustivel', 20)->nullable();
			$table->char('motor', 5)->nullable()->comment('potência');;
			$table->char('cor', 20)->nullable();
			$table->char('tipo_direcao', 20)->nullable();
			$table->enum('alarme', ['Sim','Nao'])->default('Nao')->nullable();
            $table->string ('placa', 10)->nullable();
            $table->string('valor', 20)->comment('tabela FIPE')->nullable();
            $table->integer('qntd_portas')->nullable();
            $table->timestamp('criado_em')->nullable();
            $table->timestamp('atualizado_em')->nullable();
            $table->softDeletes('excluido_em');
        });
    }

 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
