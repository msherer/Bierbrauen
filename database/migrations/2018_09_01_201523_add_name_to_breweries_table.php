<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class AddNameToBreweriesTable
 */
class AddNameToBreweriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Add "name" and "website_url" columns to the "breweries" table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('breweries', function (Blueprint $table) {
            $table->string("name");
            $table->string("website_url");
        });
    }

    /**
     * Reverse the migrations.
     *
     * Drop "name" and "website_url" columns from the "breweries" table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('breweries', function (Blueprint $table) {
            $table->dropColumn(["name", "website_url"]);
        });
    }
}
