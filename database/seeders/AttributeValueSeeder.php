<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attribute_values')->insert([
            [
                'value' => 'FHD with Dual Microphone',
                'product_attribute_id' => 1,
                'attribute_price' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'value' => 'Per-Key RGB Backlit, Black - English (UK)',
                'product_attribute_id' => 2,
                'attribute_price' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'value' => 'Killer Wi-Fi 6E 2x2 AX & Bluetooth® 5.1 or above',
                'product_attribute_id' => 3,
                'attribute_price' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'value' => 'Left side: USB-C 3.2 Gen 2 (DisplayPort™ 1.4, 140W power delivery),USB-A 3.2 Gen 1. Right side: Headphone / mic combo, USB-A 3.2 Gen 1, Electronic e-shutter switch. Rear: Power input, USB-C 3.2 Gen 2 (DisplayPort™ 1.4, power delivery 140W), 2 x USB-A 3.2 Gen 1 (1 always on 5V2A), HDMI 2.1, Ethernet (RJ45)',
                'product_attribute_id' => 4,
                'attribute_price' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'value' => 'Webcam e-shutter',
                'product_attribute_id' => 5,
                'attribute_price' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
