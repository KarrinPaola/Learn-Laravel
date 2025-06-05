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
        Schema::table('teachers', function (Blueprint $table) {
            //
            $table->string('email')->nullable()->after('name');
            $table->date('date_of_birth')->nullable()->after('email');
            $table->string('phone_number')->nullable()->after('date_of_birth');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            //
            $table->dropColumn('email');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('phone_number');
        });
    }
};
