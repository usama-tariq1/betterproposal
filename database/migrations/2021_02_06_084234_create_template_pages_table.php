<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_pages', function (Blueprint $table) {
            $table->id();
            $table->integer('template_id');
            $table->string('page_name')->default('untitled');
            $table->string('textarea')->default('untitled');
            // $table->longText('textarea')->nullable()->change();
            $table->longText('fullwidthimage')->nullable();
            $table->longText('featureimage')->nullable();
            // $table->longText('featureimage')->nullable()->change();

            $table->longText('video')->nullable();
            $table->longText('pricingtable')->nullable();
            $table->longText('digitalsignature')->nullable();
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
        Schema::dropIfExists('template_pages');
    }
}
