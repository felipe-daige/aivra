<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            // Etapa 1 — Contato
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('whatsapp', 20);

            // Etapa 2 — Empresa
            $table->string('company', 255);
            $table->string('cnpj', 18);
            $table->string('role', 255);
            $table->string('decision_power', 20);

            // Etapa 3 — Porte
            $table->string('segment', 255);
            $table->string('employees', 10);
            $table->string('revenue', 20);

            // Etapa 4 — Gargalos
            $table->text('bottlenecks');
            $table->string('process_status', 20);

            // Etapa 5 — Maturidade
            $table->text('tech_vision');
            $table->text('past_attempts');
            $table->text('current_tools');

            // Etapa 6 — Problema
            $table->text('main_problem');
            $table->text('impact');
            $table->text('timing');

            // Etapa 7 — Investimento
            $table->string('budget', 20);
            $table->string('other_decision_makers', 255);

            // Etapa 8 — Expectativas
            $table->text('expectation');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
