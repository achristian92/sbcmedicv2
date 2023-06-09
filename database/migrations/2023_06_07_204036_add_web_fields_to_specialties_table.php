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
        Schema::table('specialties', function (Blueprint $table) {
            $table->text('web_description');
            $table->boolean('web_is_active');
            $table->string('web_src_icon');
            $table->string('web_src_img');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('specialties', function (Blueprint $table) {
            $table->dropColumn('web_description');
            $table->dropColumn('web_is_active');
            $table->dropColumn('web_src_icon');
            $table->dropColumn('web_src_img');
        });
    }
};
