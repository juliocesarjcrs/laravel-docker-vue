<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        factory(Product::class, 10)->create();
        // factory(Product::class, 10)->create()->each(function ($user) {
        //     $user->posts()->save(factory(App\Post::class)->make());
        // });
    }
}
