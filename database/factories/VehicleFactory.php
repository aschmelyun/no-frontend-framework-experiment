<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    
    public $vehicles = [
        'Toyota' => [
            'Camry',
            'Corolla',
            'Prius',
            'RAV4',
            'Sienna',
            'Tacoma',
            'Tundra',
        ],
        'Ford' => [
            'Bronco',
            'Escape',
            'Explorer',
            'F-150',
            'Fusion',
            'Mustang',
            'Ranger',
        ],
        'Chevrolet' => [
            'Blazer',
            'Camaro',
            'Equinox',
            'Silverado',
            'Suburban',
            'Tahoe',
            'Trailblazer',
        ],
        'Honda' => [
            'Accord',
            'Civic',
            'CR-V',
            'Fit',
            'HR-V',
            'Odyssey',
            'Pilot',
        ],
        'Nissan' => [
            'Altima',
            'Frontier',
            'Maxima',
            'Murano',
            'Pathfinder',
            'Rogue',
            'Sentra',
        ],
        'Kia' => [
            'Forte',
            'K5',
            'Niro',
            'Seltos',
            'Sorento',
            'Sportage',
            'Telluride',
        ],
        'Hyundai' => [
            'Elantra',
            'Kona',
            'Palisade',
            'Santa Fe',
            'Sonata',
            'Tucson',
            'Venue',
        ],
    ];

    public $colors = [
        'Black',
        'Blue',
        'Brown',
        'Gray',
        'Green',
        'Orange',
        'Purple',
        'Red',
        'Silver',
        'White',
        'Yellow',
    ];

    public function definition(): array
    {
        $make = $this->faker->randomElement(array_keys($this->vehicles));

        return [
            'make' => $make,
            'model' => $this->faker->randomElement($this->vehicles[$make]),
            'year' => $this->faker->year,
            'vin' => 'T' . $this->faker->unique()->numberBetween(100000000000, 999999999999),
            'mileage' => $this->faker->numberBetween(100, 100000),
            'price' => $this->faker->numberBetween(1000, 70000),
            'color' => $this->faker->randomElement($this->colors),
        ];
    }
}
