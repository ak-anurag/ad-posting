<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_ads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('category');
            $table->string('city');
            $table->string('address')->nullable();
            $table->string('pincode')->nullable();
            $table->string('district')->nullable();
            $table->unsignedSmallInteger('age');
            $table->string('title');
            $table->text('description');
            $table->string('email');
            $table->string('phone');
            $table->unsignedTinyInteger('contact_type')->comment('1 = phone, 2 = email, 3 = both');
            $table->unsignedTinyInteger('do_whatsapp')->comment('0 = no whatsapp, 1 = do whatsapp');
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
        Schema::dropIfExists('post_ads');
    }
}
