<?php
use App\Model\PropertyTypes;
use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_types')->truncate();
        $properties = [
        	'Hotel',
        	'Hostel',
        	'Resort',
        	'Paying Guest',
        	'Private Home',
        	'Guest House',
        	'Form House',
        	'Rooms',
        ];
        foreach ($properties as $value) {
	        PropertyTypes::create(array(
	            'property_type' => $value,
	        ));
        }
    }
}
