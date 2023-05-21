<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['Male', 'Female']);
        return [
            'first_name'=> $this->faker->firstName(strtolower($gender)),
            'middle_name'=> $this->faker->lastName(),
            'last_name'=> $this->faker->lastName(),
            'contact_number'=> $this->faker->e164PhoneNumber(),
            'hire_date'=> $this->faker->date(),
            'position'=> $this->faker->randomElement(['Lead Software Engineer', 'IT Project Manager', 'Junior Django Developer',
                'Senior Laravel Developer', 'Full Stack Developer', 'Junior Backend Developer', 'Web Developer Trainee',
                'Senior React Frontend Developer', 'IT Helpdesk', 'Mid Network Engineer', 'Junior Software Engineer', 
                'Junior Flutter Developer', 'Lead Technical Engineer', 'Junior Python Developer', 'React Native Developer'
            ]),
            'email'=> $this->faker->safeEmail(),
            'gender'=> $gender,
            'age'=> $this->faker->numberBetween(23, 45),
            'birth_date'=> $this->faker->date(),
            'marital_status'=> $this->faker->randomElement(['Single', 'Married', 'Widow', 'Widower',]),
            'birth_place'=> $this->faker->city(),
            'is_regular'=> $this->faker->boolean(),
            'address'=> $this->faker->address(),
            'image'=> 'images/' . ($gender == 'Male'? 'male' : 'female') . '-headshot-' . $this->faker->numberBetween(1, 5, 'headsot') .'.jpg',
            'nationality'=> 'Filipino',
            'emergency_name'=> $this->faker->name(),
            'emergency_relationship'=> $this->faker->randomElement(['Mother', 'Father', 'Sister', 'Brother', 'Cousin']),
            'emergency_contact'=> $this->faker->e164PhoneNumber(),
        ];
    }
}
