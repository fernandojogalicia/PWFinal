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
        $products = new \App\Product([
            'nombreProducto' => 'Pelota' ,
            'imagePath' => 'https://http2.mlstatic.com/pelota-adidas-mundial-rusia-2018-n5-D_NQ_NP_974787-MLA26534212490_122017-F.jpg',
            'descripcion' => 'Pelota de Futbol, mundial Rusia 2018',
            'price' => '150',
            'peso' => '450 g',
            'altura' => '70 cm'
        ]);
        $products->save();
        $products = new \App\Product([
            'nombreProducto' => 'Pelota' ,
            'imagePath' => 'https://http2.mlstatic.com/pelota-adidas-mundial-rusia-2018-n5-D_NQ_NP_974787-MLA26534212490_122017-F.jpg',
            'descripcion' => 'Pelota de Futbol, mundial Rusia 2018',
            'price' => '150',
            'peso' => '450 g',
            'altura' => '70 cm'
        ]);
        $products->save();
        $products = new \App\Product([
            'nombreProducto' => 'Pelota' ,
            'imagePath' => 'https://http2.mlstatic.com/pelota-adidas-mundial-rusia-2018-n5-D_NQ_NP_974787-MLA26534212490_122017-F.jpg',
            'descripcion' => 'Pelota de Futbol, mundial Rusia 2018',
            'price' => '150',
            'peso' => '450 g',
            'altura' => '70 cm'
        ]);
        $products->save();
        $products = new \App\Product([
            'nombreProducto' => 'Pelota' ,
            'imagePath' => 'https://http2.mlstatic.com/pelota-adidas-mundial-rusia-2018-n5-D_NQ_NP_974787-MLA26534212490_122017-F.jpg',
            'descripcion' => 'Pelota de Futbol, mundial Rusia 2018',
            'price' => '150',
            'peso' => '450 g',
            'altura' => '70 cm'
        ]);
        $products->save();
        $products = new \App\Product([
            'nombreProducto' => 'Pelota' ,
            'imagePath' => 'https://http2.mlstatic.com/pelota-adidas-mundial-rusia-2018-n5-D_NQ_NP_974787-MLA26534212490_122017-F.jpg',
            'descripcion' => 'Pelota de Futbol, mundial Rusia 2018',
            'price' => '150',
            'peso' => '450 g',
            'altura' => '70 cm'
        ]);
        $products->save();
    }
}
