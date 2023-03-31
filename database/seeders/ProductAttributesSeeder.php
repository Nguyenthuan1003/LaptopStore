<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_attributes')->insert([
            [
                'name' => 'Camera',
                'value' => 'FHD with Dual Microphone',
                'product_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Keyboard',
                'value' => 'Per-Key RGB Backlit, Black - English (UK)',
                'product_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'WLAN',
                'value' => 'Killer Wi-Fi 6E 2x2 AX & Bluetooth® 5.1 or above',
                'product_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ports/Slots',
                'value' => 'Left side: USB-C 3.2 Gen 2 (DisplayPort™ 1.4, 140W power delivery),USB-A 3.2 Gen 1. Right side: Headphone / mic combo, USB-A 3.2 Gen 1, Electronic e-shutter switch. Rear: Power input, USB-C 3.2 Gen 2 (DisplayPort™ 1.4, power delivery 140W), 2 x USB-A 3.2 Gen 1 (1 always on 5V2A), HDMI 2.1, Ethernet (RJ45)',
                'product_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Security',
                'value' => 'Webcam e-shutter',
                'product_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
