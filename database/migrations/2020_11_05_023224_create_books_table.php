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
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('extract');

            $table->string('image')->default('default.png');
            $table->string('document')->nullable();
          
            $table->integer('page');
            $table->string('donwload');
            $table->integer('view_count')->default(0);
            $table->boolean('status')->default(false);
            $table->string('quantity');
            $table->unsignedBigInteger('category_id');
           
            $table->foreign('category_id')->references('id')
                    ->on('categories')->onDelete('cascade');
                  
            $table->unsignedInteger('editorial_id');

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
