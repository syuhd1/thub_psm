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
            $table->increments('admin_id'); // Primary Key
            $table->string('name', 25);
            $table->string('phone', 11)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('email', 25)->unique()->comment('User email');
            $table->string('password', 25)->comment('Password of user account');
            $table->enum('role', ['customer', 'admin','staff'])->default('admin');
            $table->enum('acc_status', ['Active', 'Inactive'])->default('Active')->comment('Active status');
            $table->string('picture')->nullable()->comment('Profile picture');
            //$table->timestamps('email_verified')->nullable;
            $table->timestamps();
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
