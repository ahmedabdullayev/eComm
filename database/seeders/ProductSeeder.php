<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //php artisan db:seed --class=ProductSeeder
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'IPhone 11',
                'price' => '1100',
                'description' => 'A really expensive phone',
                'category' => 'mobile',
                'gallery' => "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone11-black-select-2019?wid=834&hei=1000&fmt=jpeg&qlt=95&.v=1566956144418"
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '350',
                'description' => 'A good tv with features, lorem lorem',
                'category' => 'tv',
                'gallery' => "https://www.panasonic.com/content/dam/pim/mi/en/TH/TH-L39/TH-L39EM6M/TH-L39EM6M-Variation_Image_for_See_All_1Global-1_mi_en.png"
            ],
            [
                'name' => 'Samsung TV',
                'price' => '2210',
                'description' => 'A very nice tv with features, lorem lorem',
                'category' => 'tv',
                'gallery' => "https://images.samsung.com/is/image/samsung/levant-uhd-tu8000-ua43tu8000uxtw-frontblack-229856295?$720_576_PNG$"
            ],
            [
                'name' => 'Beko fridge',
                'price' => '2210',
                'description' => 'A very cold fridge, lorem lorem',
                'category' => 'fridge',
                'gallery' => "https://www.techinn.com/f/13819/138192803/beko-gno4331xpn-no-frost-american-fridge.jpg"
            ],
        ]);
    }
}
