<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('articles')->truncate();
        \Illuminate\Support\Facades\DB::table('articles')->insert([
            [
                'name'=>'Bánh mỳ',
                'author'=>'Ronaldo',
                'content'=>'Good',
                'images'=>'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg'
            ],
            [
                'name'=>'Bánh rán',
                'author'=>'Bale',
                'content'=>'Good',
                'images'=>'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg'
            ],
            [
                'name'=>'Bánh xèo',
                'author'=>'Ramos',
                'content'=>'Good',
                'images'=>'https://images.foody.vn/res/g25/240463/prof/s576x330/foody-mobile-12-jpg-977-636163764339001083.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'http://www.monngon.tv/uploads/images/images/br1.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'http://www.monngon.tv/uploads/images/images/br1.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Bánh chuối',
                'author'=>'Benzema',
                'content'=>'Good',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ]
        ]);
    }
}
