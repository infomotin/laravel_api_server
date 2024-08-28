<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD

=======
>>>>>>> e96e6ba1d0261faff61124a70928351b9fbf56c8
class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->json('body')->nullable();
            $table->foreignId('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->foreignId('post_id');
            $table->foreign('post_id')->on('posts')->references('id')->onDelete('cascade');
=======
>>>>>>> e96e6ba1d0261faff61124a70928351b9fbf56c8
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
