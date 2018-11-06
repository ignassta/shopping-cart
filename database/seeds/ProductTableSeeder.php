<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://vignette.wikia.nocookie.net/lego/images/1/16/Harrypottery5-7-200x200.jpg/revision/latest?cb=20111021110949',
            'title' => 'Harry Potter',
        'description' => 'Very interesting book.',
        'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vignette.wikia.nocookie.net/lego/images/1/16/Harrypottery5-7-200x200.jpg/revision/latest?cb=20111021110949',
            'title' => 'Peter Pen',
            'description' => 'Very interesting book.',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vignette.wikia.nocookie.net/lego/images/1/16/Harrypottery5-7-200x200.jpg/revision/latest?cb=20111021110949',
            'title' => 'Sun Tzu - Art Of War',
            'description' => 'Very interesting book.',
            'price' => 11
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vignette.wikia.nocookie.net/lego/images/1/16/Harrypottery5-7-200x200.jpg/revision/latest?cb=20111021110949',
            'title' => 'Baudolin',
            'description' => 'Very interesting book.',
            'price' => 9
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vignette.wikia.nocookie.net/lego/images/1/16/Harrypottery5-7-200x200.jpg/revision/latest?cb=20111021110949',
            'title' => 'English Dictionary',
            'description' => 'Very interesting book.',
            'price' => 8
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://vignette.wikia.nocookie.net/lego/images/1/16/Harrypottery5-7-200x200.jpg/revision/latest?cb=20111021110949',
            'title' => 'Kung Fu Manual',
            'description' => 'Very interesting book.',
            'price' => 15
        ]);
        $product->save();
    }
}
