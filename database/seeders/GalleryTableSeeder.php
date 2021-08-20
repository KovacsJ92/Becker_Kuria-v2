<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = config('gallery.gallery')
        ;
        $extensions = [
            'png',
            'webp'
        ];

        foreach($extensions as $extension) {
            foreach($images as $img) {
                Gallery::updateOrCreate([
                    'slug' => $img['name'],
                    'extension' => $extension,
                ], [
                    'title' => $img['title'],
                ]);
            }
        }

        
    }
}
