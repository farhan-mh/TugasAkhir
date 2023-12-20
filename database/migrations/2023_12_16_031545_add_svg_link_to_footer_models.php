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
        Schema::table('footer_models', function (Blueprint $table) {
            $table->text('svg2')->nullable();
            $table->text('svg3')->nullable();
            $table->text('link2')->nullable();
            $table->text('link3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('footer_models', function (Blueprint $table) {
            $table->dropColumn(['svg2']);
            $table->dropColumn(['svg3']);
            $table->dropColumn(['link2']);
            $table->dropColumn(['link3']);
        });
    }
};
