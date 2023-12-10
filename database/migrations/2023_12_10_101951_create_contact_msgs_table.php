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
        Schema::create('contact_msgs', function (Blueprint $table) {
            $table->bigIncrements('contactMsg_id');
            $table->string('contactMsg_name')->nullable();
            $table->string('contactMsg_email')->nullable();
            $table->string('contactMsg_subject')->nullable();
            $table->string('contactMsg_message')->nullable();
            $table->integer('contactMsg_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_msgs');
    }
};
