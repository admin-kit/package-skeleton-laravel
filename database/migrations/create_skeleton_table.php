<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('migration_table_name', function (Blueprint $table) {
            $table->id();

            // add fields

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('migration_table_name');
    }
};
