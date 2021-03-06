<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesSitesTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('services_sites', function (Blueprint $table) {
   $table->increments('id');
   $table->integer('position_site');
   $table->string('title_services', 20)->nullable();
   $table->string('description', 400)->nullable();
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
  Schema::dropIfExists('services_sites');
 }
}