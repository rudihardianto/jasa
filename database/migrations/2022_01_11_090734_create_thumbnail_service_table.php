<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThumbnailServiceTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('thumbnail_service', function (Blueprint $table) {
         $table->id();
         //  $table->integer('service_id')->nullable();
         $table->foreignId('service_id')->nullable()->index('fk_advantage_service_to_service');
         $table->longText('thumbnail');
         $table->softDeletes();
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
      Schema::dropIfExists('thumbnail_service');
   }
}