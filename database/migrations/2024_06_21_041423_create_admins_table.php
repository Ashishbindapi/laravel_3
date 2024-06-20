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
        Schema::create('admins', function (Blueprint $table) {
            $table->id(); // Admin's ID - AutoIncrement
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->integer('city_id');
            $table->longText('address')->nullable();
            $table->bigInteger('mo_no')->nullable();
            $table->tinyInteger('type')->default(1)->comment('1 => Admin, 2 => Super Admin, 3 => Sales Admin');
            $table->boolean('is_active')->default(0);
            $table->date('dob');
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
