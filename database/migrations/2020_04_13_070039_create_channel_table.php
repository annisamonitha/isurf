<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->increments('channel_id');
            $table->string('name');
            $table->string('parent_id');
            $table->string('device_type');
            $table->string('micon_type');
            $table->text('metadata');
            $table->text('description');
            //$table->tinyInteger('status');
            //$table->integer('tag_id');
            //$table->integer('field_id');
            //$table->integer('user_id');
            //$table->integer('api_id');
            //$table->rememberToken();
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
        Schema::dropIfExists('channel');
    }
}
