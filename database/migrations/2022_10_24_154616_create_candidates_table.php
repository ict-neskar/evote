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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            // $table->string('banner')->nullable();
            $table->string('image');
            $table->string('video');
            $table->string("name");
            $table->text('deskripsi');
            $table->text('visi');
            $table->text('misi');
            $table->integer("votes")->default(0);
            $table->integer("class_id");
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
        Schema::dropIfExists('candidates');
    }
};
