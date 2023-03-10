<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Song;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *
     * @return array<string, mixed>
     */

    protected $model = Song::class;
    public function definition(): array
    {
        return [
            'title'=>$this->faker->word(),
            'artist'=>$this->faker->word(),
            'genre'=>$this->faker->word(),
            'url'=>$this->faker->url(),
            'image'=>$this->faker->url(),
            'status'=> 0,
            'id_user' => 1,
        ];
    }
}

?>