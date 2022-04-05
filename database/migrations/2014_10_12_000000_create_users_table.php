<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // integer unsigned increment
            $table->string('name'); // varchar
            $table->string('email')->unique(); 
            $table->timestamp('email_verified_at')->nullable(); // posibilidad de campo vacíp
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); // created_at update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
