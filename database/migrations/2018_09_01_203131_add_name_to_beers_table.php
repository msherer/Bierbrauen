<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class AddNameToBeersTable
 */
class AddNameToBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Add "name" column to the "beers" table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beers', function (Blueprint $table) {
            //
            $table->string("name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * Drop "name" column from the "beers" table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beers', function (Blueprint $table) {
            //
            $table->dropColumn(["name"]);
        });
    }
}
