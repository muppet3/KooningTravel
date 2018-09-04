<?php

use App\Http\Controllers\Helpers\Hotelbeds;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function destinos($inicio,$fin){
        $hotel= new Hotelbeds('locations/destinations');
        foreach ($hotel->content($inicio,$fin)->destinations as $destination) {
            if(isset($destination->name->content)){
                DB::table('cities')->insert([
                    'name'=> "".$destination->name->content,
                    'code'=> "".$destination->code,
                    'country'=> "".$destination->countryCode,
                ]);
                
            }
        }
    }
    public function run()
    {
        
    }
}
