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
        Schema::create('onepieces', function (Blueprint $table) {
            $table->id();
            $table->string('CardNum')->nullable();
            $table->boolean('Alt')->nullable();
            $table->integer('Card_number')->nullable();
            $table->string('Rarity')->nullable();
            $table->string('Card_Type')->nullable();
            $table->string('Primary_color')->nullable();
            $table->string('Secondary_color')->nullable();
            $table->integer('Power')->nullable();
            $table->integer('Cost_Life')->nullable();
            $table->string('Name')->nullable();
            $table->text('Effect')->nullable();
            $table->string('Type_1')->nullable();
            $table->string('Type_2')->nullable();
            $table->string('Attribute')->nullable();
            $table->string('Img')->nullable();
            $table->string('TcgPlayer')->nullable();
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
        Schema::dropIfExists('onepieces');
    }
};
