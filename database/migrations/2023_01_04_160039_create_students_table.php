<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
             $table->id();
             $table->string('name');
             $table->string('email');
             $table->integer('phone');
              $table->string('filieres');
             $table->string('image');
                $table->timestamps();
                

               // $table->unsignedBigInteger('filiere_id');
       // $table->foreign('filiere_id')
         //   ->references('id')
          // ->on('filieres')
           // ->onDelete('restrict')
           // ->onUpdate('restrict');
            
           // Schema::disableForeignKeyConstraints();

           


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}