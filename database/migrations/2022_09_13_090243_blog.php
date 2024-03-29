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
        Schema::create(
            'blogs',
            function (Blueprint $table) {
                $table->id();
                $table->string('name', 100)->nullable()->default('name');
                $table->text('desc')->nullable();
                $table->foreignId('category_id')->references('id')->on('blog_categories')->onDelete('cascade');
                $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};