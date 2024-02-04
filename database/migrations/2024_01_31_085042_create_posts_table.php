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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('post_status')->nullable();
            $table->string('usertype')->nullable();
            $table->string('title')->nullable();
            $table->string('creator_name')->nullable();
            $table->string('case')->nullable();
            $table->string('case_name')->nullable();
            $table->longText('description')->nullable();
            $table->string('urls')->nullable();
            $table->string('file_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
