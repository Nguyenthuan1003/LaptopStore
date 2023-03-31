<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ProductGallery;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            WebSettingsTableSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ProductGallerySeeder::class,
            ProductAttributeSeeder::class,
            AttributeValueSeeder::class,
            UserSeeder::class,
            VoucherSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
            BannerSeeder::class
        ]);
    }
}
