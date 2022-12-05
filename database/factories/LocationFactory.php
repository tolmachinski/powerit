<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{   
    protected $location = Location::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location_name' => $this->faker->streetName(),
            'region_id' => $this->faker->randomDigit(),
        ];
    }

}
