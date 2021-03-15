<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTemplatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('template_pages', function (Blueprint $table) {
            $table->longText('textarea')->nullable()->change();
            $table->longText('fullwidthimage')->nullable()->change();
            $table->longText('featureimage')->nullable()->change();
            // $table->longText('featureimage')->nullable()->change();

            $table->longText('video')->nullable()->change();
            $table->longText('pricingtable')->nullable()->change();
            $table->longText('digitalsignature')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
