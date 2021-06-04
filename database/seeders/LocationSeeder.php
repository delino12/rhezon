<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations_list = ['Kogi', 'Central', 'Maitama', 'Gwarimpa', 'Abuja'];
        foreach ($locations_list as $key => $value) {
        	$location = new Location();
        	$location->name = $value;
        	$location->save();
        }
    }
}
