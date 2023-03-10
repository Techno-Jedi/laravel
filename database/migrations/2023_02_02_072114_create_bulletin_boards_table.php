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
        Schema::create('bulletin_boards', function (Blueprint $table) {
         $table->id();
         $table->string("title");
         $table->text("description");
         $table->integer("price");
         $table->string("salesman");
         $table->string("image")->nullable();
         $table->timestamps();

         $table->index("title");
         $table->index("salesman");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('bulletin_boards', function (Blueprint $table) {
           $table->dropColumn('image');
       });
    }
};
