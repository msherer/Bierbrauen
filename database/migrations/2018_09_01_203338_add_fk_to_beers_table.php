<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Add "brewery_id" column to the "beers" table.
     * Make "brewery_id" the foreign key to link to breweries table
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beers', function (Blueprint $table) {
            $table->integer('brewery_id')->unsigned();
            $table->foreign('brewery_id')->references('id')->on('breweries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * Drop "brewery_id" column from the "beers" table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beers', function (Blueprint $table) {
            // $table->dropColumn(["brewery_id"]);
        });
    }
}
