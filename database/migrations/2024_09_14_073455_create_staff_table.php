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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string("staffName");
            $table->string("staffPosition");
            $table->char("staffID");
            $table->char("gender");
            $table->string("email");
            $table->string("address");
            $table->string("department");
            $table->integer("phone");
            $table->string("supervisorName");
            $table->integer("isActive");
            $table->integer("isAdmin");
            $table->string("remark");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
