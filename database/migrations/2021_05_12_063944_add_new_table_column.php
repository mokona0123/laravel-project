<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewTableColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->string('student_name')->nullable();
            $table->string('student_degree')->nullable();
            $table->string('journal_position')->nullable();
            $table->string('fund_money')->nullable();
            $table->string('db_website')->nullable();
            $table->string('fiscal_year')->nullable();
            $table->string('project_benefit')->nullable();
            $table->string('others_reward')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->dropColumn('student_name');
            $table->dropColumn('student_degree');
            $table->dropColumn('journal_position');
            $table->dropColumn('fund_money');
            $table->dropColumn('db_website');
            $table->dropColumn('fiscal_year');
            $table->dropColumn('project_benefit');
            $table->dropColumn('others_reward');
        });
    }
}
