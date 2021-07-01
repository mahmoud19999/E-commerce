<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camera;


class CameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Camera::create([
			
		'img'=>'1.jpg',
		'name'=>'Nikon',
		'desc'=>'this is desc of camera 1',
		'price'=>'1000'
			
		]);
		
		    Camera::create([
			
		'img'=>'2.jpg',
		'name'=>'Nikon',
		'desc'=>'this is desc of camera 2',
		'price'=>'500'
			
		]);
		
		    Camera::create([
			
		'img'=>'3.jpg',
		'name'=>'Nikon',
		'desc'=>'this is desc of camera 3',
		'price'=>'250'
			
		]);
		
		    Camera::create([
			
		'img'=>'4.jpg',
		'name'=>'Nikon',
		'desc'=>'this is desc of camera 4',
		'price'=>'300'
			
		]);
		
		    Camera::create([
			
		'img'=>'5.jpg',
		'name'=>'Nikon',
		'desc'=>'this is desc of camera 5',
		'price'=>'400'
			
		]);
		
		    Camera::create([
			
		'img'=>'6.jpg',
		'name'=>'Nikon',
		'desc'=>'this is desc of camera 6',
		'price'=>'300'
			
		]);
    
    }
}
