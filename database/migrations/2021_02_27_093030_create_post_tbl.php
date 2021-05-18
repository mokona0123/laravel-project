<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('ref_id');
            $table->string('project_id');
            $table->string('project_category');
            $table->string('project_description');
            $table->string('project_faculty');
            $table->string('project_name_en');
            $table->string('project_name_th');
            $table->string('project_keyword');
            $table->string('project_email_leader');
            $table->string('project_status_leader');
            $table->string('project_start_at');
            $table->string('project_end_at');
            $table->string('project_duration');
           


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
        Schema::dropIfExists('posts');
    }
}
