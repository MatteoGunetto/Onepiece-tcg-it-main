<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Onepiece;

class OnepieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonData = file_get_contents('resources/json/CardDb.json');
        $data = json_decode($jsonData, true);

        // dd($data['Cards']);

        foreach ($data['Cards'] as $item) {
            Onepiece::create([
                'CardNum' => $item['CardNum'],
                'Alt' => isset($item['Alt']) ? $item['Alt'] : null,
                'Card_Number' => $item['Card number'],
                'Rarity' => $item['Rarity'],
                'Card_Type' => $item['Card Type'],
                'Primary_Color' => $item['Primary color'],
                'Secondary_Color' => $item['Primary color'],
                'Power' => isset($item['Power']) ? $item['Power'] : null,
                'Cost_Life' => $item['Cost/Life'],
                'Name' => $item['Name'],
                'Effect' => isset($item['Effect']) ? $item['Effect'] : null,
                'Type_1' => isset($item['Type 1']) ? $item['Type 1'] : null,
                'Type_2' => isset($item['Type 2']) ? $item['Type 2'] : null,
                'Attribute' => isset($item['Attribute']) ? $item['Attribute'] : null,
                'Img' => $item['Img'],
                'TcgPlayer' => $item['TcgPlayer']
            ]);
        }
    }
}
