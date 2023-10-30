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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')
                                        ->on('users')->onUpdate('cascade')
                                        ->onDelete('cascade');
            $table->string('title')->nullable()->default("no info");
            $table->string('paperid')->nullable()->default("no info");
            $table->string('categoryid')->nullable()->default("no info");
            $table->string('reviewersid')->nullable()->default("no info");
            $table->string('status')->nullable()->default("no info");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_journals');
    }
};
