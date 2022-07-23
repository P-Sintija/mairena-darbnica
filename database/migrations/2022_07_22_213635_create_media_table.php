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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('file_name');
            $table->string('disk');
            $table->string('conversions_disk')->nullable();
            $table->string('collection_name')->nullable();
            $table->string('mime_type')->nullable();
            $table->string('size')->nullable();
            $table->text('custom_properties')->nullable();
            $table->text('generated_conversions')->nullable();
            $table->text('responsive_images')->nullable();
            $table->text('manipulations')->nullable();
            $table->integer('model_id');
            $table->text('model_type');
            $table->uuid('uuid')->nullable();
            $table->integer('order_column')->nullable();;
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
        Schema::dropIfExists('media');
    }
};
