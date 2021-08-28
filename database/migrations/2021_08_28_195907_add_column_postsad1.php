<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPostsad1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_ads', function(Blueprint $table){
            $table->unsignedTinyInteger('is_blocked')->default(0)->comment('0 = unblocked, 1 = blocked');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_ads', function(Blueprint $table){
            $table->dropColumn('is_blocked');
        });
    }
}
