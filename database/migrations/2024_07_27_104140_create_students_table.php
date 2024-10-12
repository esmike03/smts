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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->default(null);
            $table->string('nationality')->nullable()->default(null);
            $table->string('sex')->nullable()->default(null);
            $table->string('status')->nullable()->default(null);
            $table->string('employement_status')->nullable()->default(null);
            $table->string('bmonth')->nullable()->default(null);
            $table->string('bday')->nullable()->default(null);
            $table->string('byear')->nullable()->default(null);
            $table->string('age')->nullable()->default(null);
            $table->string('bcity')->nullable()->default(null);
            $table->string('bprovince')->nullable()->default(null);
            $table->string('bregion')->nullable()->default(null);
            $table->string('disability')->nullable()->default(null);
            $table->string('ncae')->nullable()->default(null);
            $table->string('where')->nullable()->default(null);
            $table->string('when')->nullable()->default(null);
            $table->string('qualification')->nullable()->default(null);
            $table->string('type_scholar')->nullable()->default(null);
            $table->string('disclaimer')->nullable()->default(null);
            $table->string('course_id')->nullable()->default(null);
            $table->string('course_status')->nullable()->default(null);
            $table->string('notes')->nullable()->default(null);
            $table->string('signature')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
