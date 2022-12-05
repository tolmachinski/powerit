<?php

namespace Database\Factories;

use App\Models\Regions;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegionsFactory extends Factory
{   
    protected $region = Regions::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'region_name' => $this->faker->city(),
            'country_id' => $this->faker->randomDigit(),
        ];
    }

}
