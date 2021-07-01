<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laptop;


class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laptop::create([
			
		'img'=>'1.jpg',
		'name'=>'Apple',
		'desc'=>'this is desc of laptop 1',
		'price'=>'1000'
			
		]);
		
		    Laptop::create([
			
		'img'=>'2.jpg',
		'name'=>'Toshipa',
		'desc'=>'this is desc of laptop 2',
		'price'=>'500'
			
		]);
		
		    Laptop::create([
			
		'img'=>'3.jpg',
		'name'=>'samsung',
		'desc'=>'this is desc of laptop 3',
		'price'=>'250'
			
		]);
		
		    Laptop::create([
			
		'img'=>'4.jpg',
		'name'=>'Sony',
		'desc'=>'this is desc of laptop 4',
		'price'=>'300'
			
		]);
		
		    Laptop::create([
			
		'img'=>'5.jpg',
		'name'=>'LG',
		'desc'=>'this is desc of laptop 5',
		'price'=>'400'
			
		]);
		
		    Laptop::create([
			
		'img'=>'6.jpg',
		'name'=>'Tornido',
		'desc'=>'this is desc of laptop 6',
		'price'=>'300'
			
		]);
    
    }
}
