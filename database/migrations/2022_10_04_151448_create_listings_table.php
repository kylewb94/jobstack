<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('listings', function (Blueprint $table) {
      $table->id();
      // onDelete('cascade') -> Delete listings on user delete
      $table->foreignId('user_id')->constrained()->onDelete('cascade');
      $table->text('titles', [
        'Front End Web Developer', 'Back End Web Developer', 'Full Stack Web Developer', 'Junior Web Developer', 'Senior Web Developer'
      ]);
      $table->text('company');
      $table->text('tags', [
        'JavaScript', 'HTML', 'CSS', 'Sass', 'Tailwind', 'Bootstrap', 'React', 'Redux', 'Next.js', 'Vue', 'Angular', 'Node.js', 'Express', 'Laravel', 'PHP', 'MySQL', 'Git'
      ]);
      $table->text('location');
      $table->text('email');
      $table->text('website')->nullable();
      $table->longText('description');
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
    Schema::dropIfExists('listings');
  }
};
