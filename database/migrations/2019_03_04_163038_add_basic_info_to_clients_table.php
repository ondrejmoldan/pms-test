<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBasicInfoToClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('lastname')->after('name');
            $table->renameColumn('name', 'firstname');
            $table->string('email')->after('lastname');
            $table->string('phone')->after('email')->nullable;
            $table->string('bank_account')->after('phone')->nullable;
            $table->unsignedBigInteger('dni')->after('bank_account')->nullable;
            $table->string('vat')->after('dni')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
        });
    }
}
