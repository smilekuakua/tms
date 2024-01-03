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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('working_field');
            $table->string('company_address');
            $table->string('company_fax');
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_web_address');
            $table->text('company_description');
            $table->string('supervisor_name');
            $table->string('supervisor_surname');
            $table->string('supervisor_email');
            $table->string('supervisor_position');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropConstrainedForeignId('user_id');
        });
        Schema::dropIfExists('applications');
    }
};
