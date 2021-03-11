<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::factory(10)->create();

        /*foreach ($this->images as $image) {
            Image::create([
                'url' => $image['url']
            ]);
        }*/
    }

    protected $images = [
        ['url' => '1'],
        ['url' => '1'],
        ['url' => '1'],
        ['url' => '1'],
    ];
}
