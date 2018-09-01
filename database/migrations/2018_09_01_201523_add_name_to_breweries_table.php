<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameToBreweriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('breweries', function (Blueprint $table) {
            //
            $table->string("name");
            $table->string("website_url");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('breweries', function (Blueprint $table) {
            //
            $table->dropColumn(["name", "website_url"]);
        });
    }
}
