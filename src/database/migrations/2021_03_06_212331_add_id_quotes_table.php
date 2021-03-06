<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->bigInteger('quote_by_id')->unsigned()->after('quote_by');
            $table->bigInteger('submitted_by_id')->unsigned()->after('submitted_by');
            $table->bigInteger('channel_id')->unsigned()->after('channel_name');
            $table->string('guild_name')->after('channel_id');
            $table->bigInteger('guild_id')->unsigned()->after('guild_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->dropColumn('quote_by_id');
            $table->dropColumn('submitted_by_id');
            $table->dropColumn('channel_id');
            $table->dropColumn('guild_name');
            $table->dropColumn('guild_id');
        });
    }
}
