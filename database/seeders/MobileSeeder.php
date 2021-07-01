<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mobile;


class MobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mobile::create([
			
		'img'=>'1.jpg',
		'name'=>'iphone 12',
		'desc'=>'this is desc of mobile 1',
		'price'=>'1000'
			
		]);
		
		    Mobile::create([
			
		'img'=>'2.jpg',
		'name'=>'samsung',
		'desc'=>'this is desc of mobile 2',
		'price'=>'500'
			
		]);
		
		    Mobile::create([
			
		'img'=>'3.jpg',
		'name'=>'sony',
		'desc'=>'this is desc of mobile 3',
		'price'=>'250'
			
		]);
		
		    Mobile::create([
			
		'img'=>'4.jpg',
		'name'=>'Huwawi',
		'desc'=>'this is desc of mobile 4',
		'price'=>'300'
			
		]);
		
		    Mobile::create([
			
		'img'=>'5.jpg',
		'name'=>'Htc',
		'desc'=>'this is desc of mobile 5',
		'price'=>'400'
			
		]);
		
		    Mobile::create([
			
		'img'=>'6.jpg',
		'name'=>'shawmi',
		'desc'=>'this is desc of mobile 6',
		'price'=>'300'
			
		]);
    }
}
