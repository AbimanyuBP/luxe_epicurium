<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurant = [
            [
                'name' => 'Admin',
                'description' => '"Luxe Epicurium" is an upscale Michelin-starred restaurant that offers a truly luxurious and memorable dining experience. The restaurant is known for its exquisite fusion of culinary artistry, exceptional service, and an ambiance that exudes opulence and sophistication.',
                'address' => '15 Rue de la Gastronomie
                Étoile Ville, Haute Cuisine Quartier
                Épicurien Département, Gourmet Région
                75001
                Savoir-Faire France',
                'phone_number' => '0765436438',
                'website' => 'www.LuxeEpicurium.com',
            ],
        ];

        foreach ($restaurant as $key => $value) {
            Restaurant::create($value);
        }
    }
}
