<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalityListsTable extends Migration
{
    public function up()
    {
        Schema::create('nationality_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nationality_lists');
    }
}
