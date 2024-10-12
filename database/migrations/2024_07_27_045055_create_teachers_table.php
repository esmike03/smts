<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('accreditation_number')->nullable()->default(null);
            $table->date('date_of_birth')->nullable()->default(null);
            $table->string('gender', 10)->nullable()->default(null);
            $table->date('date_of_accreditation')->nullable()->default(null);
            $table->string('subject')->nullable()->default(null);
            $table->string('contact')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('zip_code')->nullable()->default(null);
            $table->string('upload')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
