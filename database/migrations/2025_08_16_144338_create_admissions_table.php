<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('parent_name');
            $table->string('parent_phone');
            $table->string('address');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('admissions');
    }
};
