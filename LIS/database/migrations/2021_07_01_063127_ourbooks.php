<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ourbooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('lis',function(Blueprint $table){
			$table -> bigIncrements('id');
			
			$table->string('imagePath');
			$table->string('title');
			$table->text('description');
			$table->integer('price');
			
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		
    }
}
