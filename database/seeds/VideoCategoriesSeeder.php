<?php

use Illuminate\Database\Seeder;
use App\Models\VideoCategory;

class VideoCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Environment',
                'description' => ''
            ],
            [
                'name' => 'World',
                'description' => ''
            ],
            [
                'name' => 'Society',
                'description' => ''
            ],
            [
                'name' => 'Future',
                'description' => ''
            ],
            [
                'name' => 'Identities',
                'description' => ''
            ],
            [
                'name' => 'Travel + Food',
                'description' => ''
            ],
            [
                'name' => 'Culture',
                'description' => ''
            ],
            [
                'name' => 'Unusual',
                'description' => ''
            ],
            [
                'name' => 'VoxPop',
                'description' => ''
            ],
            [
                'name' => 'Tribune',
                'description' => ''
            ],

        ];
        foreach ($categories as $key => $category) {
            VideoCategory::create($category);
        }
    }
}
