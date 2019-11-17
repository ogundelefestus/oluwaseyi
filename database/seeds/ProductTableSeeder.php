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
          'imagePath'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSv9aGlXGXQth79tr3H7Yrl_WR6gq9x5VqhwsvcY-nWuTGbpYDBGw',
          'title'=>'Timberland',
          'description'=>'beautiful shoe',
          'price'=>40

        ]);

        $product->save();

         $product = new \App\Product([
          'imagePath'=>'https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
          'title'=>'Nike',
          'description'=>'beautiful shoe',
          'price'=>90

        ]);

        $product->save();
         $product = new \App\Product([
          'imagePath'=>'https://images.unsplash.com/photo-1459712105412-be146fae746d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
          'title'=>'Timberland',
          'description'=>'beautiful shoe',
          'price'=>26

        ]);

        $product->save();
         $product = new \App\Product([
          'imagePath'=>'https://images.unsplash.com/photo-1555081890-cdd2b59853f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
             'title'=>'Nike',
          'description'=>'beautiful shoe',
          'price'=>32

        ]);

        $product->save();
         $product = new \App\Product([
          'imagePath' => 'https://images.unsplash.com/photo-1566053551509-c0571312fa2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
          'title' => 'Timberland',
          'description' => 'beautiful shoe',
          'price'=>19

        ]);

        $product->save();
         $product = new \App\Product([
          'imagePath'=>'https://images.pexels.com/photos/336372/pexels-photo-336372.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
          'title'=>'Nike',
          'description'=>'beautiful shoe',
          'price'=>15

        ]);

        $product->save();

        $product = new \App\Product([
          'imagePath'=>'https://images.pexels.com/photos/267320/pexels-photo-267320.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
          'title'=>'Timberland',
          'description'=>'beautiful shoe',
          'price'=>90

        ]);

        $product->save();
        $product = new \App\Product([
          'imagePath'=>'https://images.pexels.com/photos/40377/sandals-blue-shoes-strap-shoe-40377.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
          'title'=>'Nike',
          'description'=>'beautiful shoe',
          'price'=>10

        ]);

        $product->save();
        $product = new \App\Product([
          'imagePath'=>'https://images.pexels.com/photos/1503009/pexels-photo-1503009.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
          'title'=>'Timberland',
          'description'=>'beautiful shoe',
          'price'=>28

        ]);

        $product->save();
        $product = new \App\Product([
          'imagePath'=>'https://images.pexels.com/photos/1639729/pexels-photo-1639729.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
          'title'=>'Nike',
          'description'=>'beautiful shoe',
          'price'=>30

        ]);

        $product->save();
        $product = new \App\Product([
          'imagePath'=>'https://images.pexels.com/photos/1619655/pexels-photo-1619655.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
          'title'=>'Timberland',
          'description'=>'beautiful shoe',
          'price'=>23

        ]);

        $product->save();
        $product = new \App\Product([
          'imagePath'=>'https://images.pexels.com/photos/35674/shoes-leather-pair-fashion.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500',
          'title'=>'Nike',
          'description'=>'beautiful shoe',
          'price'=>20

        ]);

        $product->save();
    }
}
