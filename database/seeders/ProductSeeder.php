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
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'LG monitor',
                'price'=>'10000',
                'description'=>'A 22 inch monitor with 60 Hz refresh rate',
                'category'=>'monitor',
                'gallery'=>'https://www.techlandbd.com/image/cache/wp/gj/Monitor/LG%20Monitor/techlandbd-LG%2022MK600M.jpg-483x483.webp'
            ],
            [
                'name'=>'Zotac Gaming GeForce GTX 1650 Super 4GB GDDR6 Twin Fan Graphics Card',
                'price'=>'34000',
                'description'=>'Super Compact,4K and HDR Ready,Dual Fan,FireStorm Utility',
                'category'=>'Graphics Card',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/graphics-card/zotac/gtx-1660-super/geforce-gtx-1660-super-500x500.jpg'
    
            ],
            [
                'name'=>'Royal Kludge RK71 Dual Mode RGB (Blue Switch) White Mechanical Gaming Keyboard',
                'price'=>'3900',
                'description'=>'Type - Mechanical Gaming Keyboard,Lighting - Yes, Interface - Bluetooth & USB, Combo Package - Keyboard only, Mechanical (Key) - Yes',
                'category'=>'Keyboard',
                'gallery'=>'https://www.skyland.com.bd/wp-content/uploads/RK-71-6-2.jpg'
            ],
            [
                'name'=>'Corsair Katar PRO Ultra Light Gaming Mouse Black',
                'price'=>'1100',
                'description'=>'MPN: CH-930C011-AP,Model: Corsair Katar Pro,No Strings Attached,DPI: 200 DPI - 12,400,Light & Amazingly Agile,6 Programmable Buttons',
                'category'=>'mouse',
                'gallery'=>'https://www.techlandbd.com/image/cache/wp/gp/Mouse/Corsair/corsair-katar-pro-gaming-mouse.png-483x483.webp'
            ],
            [
                'name'=>'Asus TUF GAMING B460-PRO Wi-Fi Intel 10th Gen Motherboard',
                'price'=>'15400',
                'description'=>'Intel® LGA 1200 socket: Ready for 10th Gen Intel® Core™ processors, Enhanced power solution: 6+1+1 power stages, military-grade TUF components,',
                'category'=>'motherboard',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/motherboard/asus/tuf-gaming-b460-pro-wi-fi/tuf-gaming-b460-pro-wi-fi-500x500.jpg'
            ]
           
        ]);
    }
}