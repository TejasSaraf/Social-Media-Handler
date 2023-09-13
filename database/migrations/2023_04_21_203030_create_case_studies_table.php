<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('solution');
            $table->text('result');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('case_studies');
    }
};