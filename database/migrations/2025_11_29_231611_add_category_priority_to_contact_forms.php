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
        Schema::table('contact_forms', function (Blueprint $table) {
            if (!Schema::hasColumn('contact_forms', 'category')) {
                $table->string('category')->nullable()->after('message');
            }
            if (!Schema::hasColumn('contact_forms', 'priority')) {
                $table->string('priority')->nullable()->after('category');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            if (Schema::hasColumn('contact_forms', 'category')) {
                $table->dropColumn('category');
            }
            if (Schema::hasColumn('contact_forms', 'priority')) {
                $table->dropColumn('priority');
            }
        });
    }
};
