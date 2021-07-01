<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clothe;

class ClotheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
      @return void
     */
    public function run()
    {
        Clothe::create([
			
		'img'=>'1.png',
		'name'=>'T-shirt',
		'desc'=>'this is desc of product 1',
		'size'=>'35',
		'price'=>'100',
		'quantity'=>'10'
			
		]);
		
		    Clothe::create([
			
		'img'=>'2.png',
		'name'=>'T-shirt',
		'desc'=>'this is desc of product 2',
		'size'=>'30',
	'price'=>'200',
		'quantity'=>'10'
	
		]);
		
		    Clothe::create([
			
		'img'=>'3.png',
		'name'=>'T-shirt',
		'desc'=>'this is desc of product 3',
		'size'=>'40',
		'price'=>'300',
		'quantity'=>'10'
			
		]);
		
		    Clothe::create([
			
		'img'=>'4.png',
		'name'=>'T-shirt',
		'desc'=>'this is desc of product 4',
		'size'=>'30',
		'price'=>'400',
		'quantity'=>'10'
			
		]);
		
		    Clothe::create([
			
		'img'=>'5.png',
		'name'=>'T-shirt',
		'desc'=>'this is desc of product 5',
		'size'=>'40',
	'price'=>'500',
		'quantity'=>'10'
			
		]);
		
		    Clothe::create([
			
		'img'=>'6.png',
		'name'=>'T-shirt',
		'desc'=>'this is desc of product 6',
		'size'=>'25',
	'price'=>'600',
		'quantity'=>'10'
			
		]);
	
    }
}
