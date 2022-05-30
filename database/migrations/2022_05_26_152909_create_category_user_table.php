<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_user', function (Blueprint $table) {
            $table -> unsignedBigInteger('category_id');
            $table -> unsignedBigInteger('user_id');

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('no action');
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('no action');

            $table->primary(['category_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_user');
    }
}
