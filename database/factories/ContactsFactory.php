<?php

namespace Database\Factories;

use App\Models\contacts;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = contacts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' =>  $this->faker->phoneNumber,
            'sec_phone' =>  $this->faker->phoneNumber,
            'country' => Str::random(10),
            'company' => Str::random(10)
        ];
    }
}
