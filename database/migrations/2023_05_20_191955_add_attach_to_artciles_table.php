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
        Schema::table('artciles', function (Blueprint $table) {
            $table->string('attach')->nullable()->after('descrip');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('artciles', function (Blueprint $table) {
            $table->dropColumn('attach');
        });
    }
};
