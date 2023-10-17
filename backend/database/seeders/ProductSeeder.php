<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vegetables = [
            [
                'product_name' => 'Wortel',
                'product_description' => 'Wortel adalah sayuran yang kaya akan vitamin A dan baik untuk kesehatan mata.',
                'product_price' => 8000,
                'image' => '1685703506.jpg'
            ],
            [
                'product_name' => 'Bayam',
                'product_description' => 'Bayam merupakan sayuran hijau yang kaya akan zat besi dan baik untuk kesehatan tulang.',
                'product_price' => 6000,
                'image' => '1685703514.jpg'
            ],
            [
                'product_name' => 'Kubis',
                'product_description' => 'Kubis adalah sayuran yang kaya akan serat dan vitamin C, serta dapat membantu menjaga kekebalan tubuh.',
                'product_price' => 5000,
                'image' => '1685703523.jpg'
            ],
            [
                'product_name' => 'Buncis',
                'product_description' => 'Buncis adalah sayuran panjang yang enak dan mengandung banyak nutrisi, termasuk serat dan protein.',
                'product_price' => 7000,
                'image' => '1685703533.jpg'
            ],
            [
                'product_name' => 'Terong',
                'product_description' => 'Terong adalah sayuran ungu yang enak dan bergizi, mengandung antioksidan dan dapat membantu menjaga kesehatan jantung.',
                'product_price' => 9000,
                'image' => '1685703578.jpg'
            ],
            [
                'product_name' => 'Kentang',
                'product_description' => 'Kentang adalah umbi-umbian yang mengandung karbohidrat dan vitamin B6.',
                'product_price' => 4000,
                'image' => '1685703608.jpg'
            ],
            [
                'product_name' => 'Tomat',
                'product_description' => 'Tomat adalah buah yang mengandung likopen dan vitamin C, baik untuk kesehatan kulit.',
                'product_price' => 3000,
                'image' => '1685703620.jpg'
            ],
            [
                'product_name' => 'Brokoli',
                'product_description' => 'Brokoli adalah sayuran hijau yang mengandung serat dan vitamin K, baik untuk kesehatan tulang.',
                'product_price' => 5500,
                'image' => '1685703628.jpg'
            ],
            [
                'product_name' => 'Kangkung',
                'product_description' => 'Kangkung adalah sayuran yang tinggi air dan kaya akan vitamin A, C, dan K.',
                'product_price' => 2500,
                'image' => '1685704374.jpg'
            ],
            [
                'product_name' => 'Labu',
                'product_description' => 'Labu adalah buah yang kaya akan serat dan mengandung beta-karoten untuk menjaga kesehatan mata.',
                'product_price' => 3500,
                'image' => '1685704384.jpg'
            ],
            [
                'product_name' => 'Selada',
                'product_description' => 'Selada adalah sayuran segar dengan kandungan rendah kalori dan tinggi serat.',
                'product_price' => 4500,
                'image' => '1685704384.jpg'
            ],
            [
                'product_name' => 'Kacang Panjang',
                'product_description' => 'Kacang panjang adalah sayuran yang kaya akan serat dan mengandung vitamin C.',
                'product_price' => 6000,
                'image' => '1685704398.jpg'
            ],
            [
                'product_name' => 'Cabe',
                'product_description' => 'Cabe adalah buah yang memiliki rasa pedas dan mengandung capsaicin yang baik untuk kesehatan jantung.',
                'product_price' => 7500,
                'image' => '1685704416.jpg'
            ],
            [
                'product_name' => 'Timun',
                'product_description' => 'Timun adalah sayuran yang kaya akan air dan menyegarkan saat dimakan.',
                'product_price' => 4000,
                'image' => '1685704876.jpg'
            ],
            [
                'product_name' => 'Paprika',
                'product_description' => 'Paprika adalah sayuran berwarna-warni yang mengandung vitamin C dan serat.',
                'product_price' => 6500,
                'image' => '1685704891.jpg'
            ],
            [
                'product_name' => 'Sawi',
                'product_description' => 'Sawi adalah sayuran hijau yang kaya akan vitamin C dan serat.',
                'product_price' => 3000,
                'image' => '1685704904.jpg'
            ],
            [
                'product_name' => 'Daun bawang',
                'product_description' => 'Daun bawang adalah sayuran yang sering digunakan sebagai bumbu masakan, mengandung vitamin A dan C.',
                'product_price' => 2000,
                'image' => '1685704916.jpg'
            ],
            [
                'product_name' => 'Terong Hijau',
                'product_description' => 'Terong hijau adalah sayuran hijau yang memiliki rasa lezat dan kaya akan serat.',
                'product_price' => 4000,
                'image' => '1685704928.jpg'
            ],
            [
                'product_name' => 'Jagung',
                'product_description' => 'Jagung adalah sayuran yang kaya akan serat dan mengandung vitamin B serta zat besi.',
                'product_price' => 5000,
                'image' => '1685704944.jpg'
            ],
            [
                'product_name' => 'Sawi Putih',
                'product_description' => 'Sawi putih adalah sayuran hijau yang kaya akan serat dan vitamin K.',
                'product_price' => 3500,
                'image' => '1685704958.jpg'
            ],
            [
                'product_name' => 'Labu Siam',
                'product_description' => 'Labu siam adalah sayuran yang enak dimasak dengan bumbu dan mengandung serat.',
                'product_price' => 4000,
                'image' => '1685704977.jpg'
            ],
        ];

        foreach ($vegetables as $vegetable) {
            DB::table('products')->insert([
                'product_name' => $vegetable['product_name'],
                'product_description' => $vegetable['product_description'],
                'product_price' => $vegetable['product_price'],
                'image' => $vegetable['image']
            ]);
        }
    }
}
