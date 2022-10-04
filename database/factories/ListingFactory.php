<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'user_id' => User::factory(),
      'titles' => implode(",", $this->faker->randomElements([
        'Front End Web Developer', 'Back End Web Developer', 'Full Stack Web Developer', 'Junior Web Developer', 'Senior Web Developer'
      ], 1)),
      'tags' => implode(",", $this->faker->randomElements([
        'JavaScript', 'HTML', 'CSS', 'Sass', 'Tailwind', 'Bootstrap', 'React', 'Redux', 'Next.js', 'Vue', 'Angular', 'Node.js', 'Express', 'Laravel', 'PHP', 'MySQL', 'Git'
      ], 3)),
      'company' => $this->faker->company(),
      'email' => $this->faker->companyEmail(),
      'website' => $this->faker->url(),
      'location' => $this->faker->city(),
      'description' => $this->faker->paragraph(5)
    ];
  }
}
