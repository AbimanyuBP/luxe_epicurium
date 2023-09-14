<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Table;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $table = [
            [
                'restaurant_id' => '1',
                'table_number' => 'diamond_01',
                'description' => 'The Diamond Table at Luxe Epicurium boasts an opulent setting with an ebony wood table resembling a faceted diamond. Silver and crystal accents add elegance. Plush velvet chairs accommodate up to four guests, creating an intimate ambiance. This luxurious setting enhances the dining experience at the Michelin-starred restaurant.',
                'accessibility' => 'wheelchair, bright',
                'capacity' => 4,
            ],
            [
                'restaurant_id' => '1',
                'table_number' => 'ruby_01',
                'description' => 'The Ruby Table at Luxe Epicurium features rich, crimson hues in its setting and decor, evoking the allure of the precious gemstone. The table is adorned with ruby-red accents, crystal details, and exquisite silverware. Plush seating for up to six guests provides comfort and intimacy for a memorable dining experience',
                'accessibility' => 'wheelchair, intimate',
                'capacity' => 4,
            ],
            [
                'restaurant_id' => '1',
                'table_number' => 'emerald_01',
                'description' => 'The Emerald Table at Luxe Epicurium exudes an air of natural elegance. The table is adorned with lush green accents and intricately designed crystal elements, reminiscent of the precious gemstone. Comfortable seating for up to eight guests creates a spacious yet intimate dining experience, in harmony with the lush ambiance',
                'accessibility' => 'wheelchair, nature',
                'capacity' => 4,
            ],
        ];

        foreach ($table as $key => $value) {
            Table::create($value);
        }
    }
}
