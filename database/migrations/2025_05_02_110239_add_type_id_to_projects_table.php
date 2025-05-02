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
        Schema::table('projects', function (Blueprint $table) {
            
            // aggiungo la colonna type_id alla tabella projects
            $table->foreignId("type_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // rimuovo la foreign key type_id dalla tabella projects
            $table->dropForeign('projects_type_id_foreign');

            // rimuovo la colonna type_id dalla tabella projects
            $table->dropColumn('type_id');
        });
    }
};
