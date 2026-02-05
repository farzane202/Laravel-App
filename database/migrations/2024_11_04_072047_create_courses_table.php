<?php

use App\Models\Teacher;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{

    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description1');
            $table->text('video');
            $table->text('description2');
            $table->text('otherCourse');
            $table->text('otherCourseDescription');
            $table->integer('video_count');
            $table->string('hour');
            $table->string('level');
            $table->foreignIdFor(Teacher::class);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
