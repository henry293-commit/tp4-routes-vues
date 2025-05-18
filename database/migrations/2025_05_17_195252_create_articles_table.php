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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('poids')->length(20);
            $table->string('couleur');
            $table->decimal('prix_achat', 10, 2); // 6 chiffres avant la virgule = (10 - 2)
            $table->foreignId('fournisseur_id')->constrained('fournisseurs')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('poids')->length(20);
            $table->string('couleur');
            $table->decimal('prix_achat', 10, 2); // 6 chiffres avant la virgule = (10 - 2)
            $table->foreignId('fournisseur_id')->constrained('fournisseurs')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('poids')->length(20);
            $table->string('couleur');
            $table->decimal('prix_achat', 10, 2); // 6 chiffres avant la virgule = (10 - 2)
            $table->foreignId('fournisseur_id')->constrained('fournisseurs')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('poids')->length(20);
            $table->string('couleur');
            $table->decimal('prix_achat', 10, 2); // 6 chiffres avant la virgule = (10 - 2)
            $table->foreignId('fournisseur_id')->constrained('fournisseurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
