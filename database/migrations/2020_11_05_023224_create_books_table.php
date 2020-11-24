<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('title');
            $table->text('description');
            $table->string('extract');
            $table->string('image')->default('default.png');
            $table->string('document');
            $table->string('material');
            $table->integer('view_count')->default(0);
            $table->boolean('status')->default(false);    
            $table->timestamp('published_at')->nullable();
            $table->string('quantity');   

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
        Schema::dropIfExists('books');
    }
}
