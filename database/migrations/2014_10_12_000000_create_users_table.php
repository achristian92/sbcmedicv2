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
        Schema::table('users', function (Blueprint $table) {
            $table->string('password',255)->change();
            $table->string('password_raw')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->timestamps();
        });

        Schema::table('rol', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('permiso', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('permiso_rol', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('specialties', function (Blueprint $table) {
            $table->string('idStyle',10)->nullable()->change();
            $table->timestamps();
        });

        Schema::table('procedimientos', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('patients', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('availabilities', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('doctors', function (Blueprint $table) {
            $table->string('rne')->nullable()->change();
            $table->string('cnp')->nullable()->change();
            $table->string('cpp')->nullable()->change();
            $table->string('aleatorio')->nullable()->change();

            $table->unsignedInteger('document_type_id')->nullable();
            $table->string('nro_document')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->unsignedInteger('department_id')->nullable();
            $table->unsignedInteger('province_id')->nullable();
            $table->unsignedInteger('district_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('address')->nullable();
            $table->string('src_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('password_raw');
            $table->dropColumn('last_login');
            $table->dropTimestamps();
        });

        Schema::table('rol', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('permiso', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('permiso_rol', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('specialties', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('procedimientos', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('patients', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('availabilities', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('document_type_id');
            $table->dropColumn('nro_document');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('birthdate');
            $table->dropColumn('gender');
            $table->dropColumn('department_id');
            $table->dropColumn('province_id');
            $table->dropColumn('district_id');
            $table->dropColumn('user_id');
            $table->dropColumn('address');
            $table->dropColumn('src_img');
            $table->dropTimestamps();
        });
    }
};
