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
        /* hotelbeds */
        $this->destinos('1','1000');
        $this->destinos('1001','2000');
        $this->destinos('2001','3000');
        $this->destinos('3001','4000');
        $this->destinos('4001','5000');

        $gorups = new Hotelbeds('types/facilitygroups');
        foreach ( $gorups->content('1','1000')->facilityGroups as $group) {
            DB::table('groupfacilities')->insert([
                'code'       => (int)$group->code,
                'description'=> $group->description->content,
            ]);
        }
        $facilities = new Hotelbeds('types/facilities');
        foreach ( $facilities->content('1','1000')->facilities as $facility) {
            DB::table('facilities')->insert([
                'code' => (int) $facility->code,
                'description' =>  $facility->description->content,
                'groupfacility_id' => (int) $facility->facilityGroupCode,
            ]);
        }

        /* fin hotelbeds*/
        DB::table('users')->insert([
            'name'      => 'Administrator',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('secret'),
            //'type_user' => 'Admin'
        ]);

        DB::table('categories')->insert([
            'name'      => 'Experiencias Xcaret',
            'type'      => 'Parque',
            'divisa'    =>  19.00 
                    ]);
        DB::table('categories')->insert([
            'name'      => 'Dolphin Discovery',
            'type'      => 'Parque',
            'divisa'    =>  19.00 
                    ]);
        DB::table('categories')->insert([
            'name'      => 'Rio-Secreto',
            'type'      => 'Parque',
            'divisa'    =>  19.00 
                    ]);
         DB::table('categories')->insert([
            'name'      => 'Circus-Soleil',
            'type'      => 'Parque',
            'divisa'    =>  19.00 
                    ]);



         DB::table('categories')->insert([
            'name'      => 'Mayaland-Tours',
            'type'      => 'Tour',
            'divisa'    =>  19.00 
                    ]);
         DB::table('categories')->insert([
            'name'      => 'Catamaran-Tours',
            'type'      => 'Tour',
            'divisa'    =>  19.00 
                    ]);
         DB::table('categories')->insert([
            'name'      => 'Holbox-Tours',
            'type'      => 'Tour',
            'divisa'    =>  19.00 
                    ]);


        DB::table('campaigns')->insert([
            'name'      => 'Goza tus viajes de negocios',
            'status'    => true,
        ]);
        DB::table('campaigns')->insert([
            'name'      => 'Viaja en México y por México',
            'status'    => true,
        ]);
        DB::table('campaigns')->insert([
            'name' => 'Disfruta México',
            'status' => true,
        ]);
        DB::table('campaigns')->insert([
            'name' => 'Festeja tu cumpleaños',
            'status' => true,
        ]);
        DB::table('campaigns')->insert([
            'name' => 'Vive, Disfruta y Viaja',
            'status' => true,
        ]);
        DB::table('campaigns')->insert([
            'name' => 'Preventa Verano',
            'status' => true,
            'check_in' => '2018-08-23',
            'check_out' => '2018-08-27',
        ]);




        ////////////////////////////////////////////////// destinos ///////////////////////////////////////////////////////////////
        //playa

        DB::table('destinations')->insert([
            'code'=>'1',
            'name'=>'Acapulco',
            'type'=>'playa',
        ]);

        DB::table('destinations')->insert([
            'code'=>'3',
            'name'=>'Playa del Carmen',
            'type'=>'playa',
        ]);

        DB::table('destinations')->insert([
            'code'=>'13',
            'name'=>'Riviera Maya',
            'type'=>'playa',
        ]);

        DB::table('destinations')->insert([
            'code'=>'2',
            'name'=>'Cancún ',
            'type'=>'playa',
        ]);

        DB::table('destinations')->insert([
            'code'=>'9',
            'name'=>'Mazatlán',
            'type'=>'playa',
        ]);

        DB::table('destinations')->insert([
            'code'=>'5',
            'name'=>'Huatulco',
            'type'=>'playa',
        ]);

        DB::table('destinations')->insert([
            'code'=>'12',
            'name'=>'Puerto Vallarta',
            'type'=>'playa',
        ]);

        DB::table('destinations')->insert([
            'code'=>'31',
            'name'=>'Veracruz',
            'type'=>'playa',
        ]);

        DB::table('destinations')->insert([
            'code'=>'4',
            'name'=>'Cozumel',
            'type'=>'playa',
        ]);

        DB::table('destinations')->insert([
            'code'=>'8',
            'name'=>'Los Cabos',
            'type'=>'playa',
        ]);

        DB::table('destinations')->insert([
            'code'=>'14',
            'name'=>'Holbox',
            'type'=>'playa',
        ]);
        DB::table('destinations')->insert([
            'code'=>'7',
            'name'=>'Ixtapa Zihuatanejo',
            'type'=>'playa',
        ]);


        //ciudades
        DB::table('destinations')->insert([
            'code'=>'39',
            'name'=>'Puebla',
            'type'=>'ciudad',
        ]);

        DB::table('destinations')->insert([
            'code'=>'17',
            'name'=>'Oaxaca',
            'type'=>'ciudad',
        ]);

        DB::table('destinations')->insert([
            'code'=>'32',
            'name'=>'Monterrey',
            'type'=>'ciudad',
        ]);

        DB::table('destinations')->insert([
            'code'=>'10',
            'name'=>'Mérida',
            'type'=>'ciudad',
        ]);

        DB::table('destinations')->insert([
            'code'=>'47',
            'name'=>'Guanajuato',
            'type'=>'ciudad',
        ]);

        DB::table('destinations')->insert([
            'code'=>'11',
            'name'=>'México',
            'type'=>'ciudad',
        ]);

        DB::table('destinations')->insert([
            'code'=>'15',
            'name'=>'Guadalajara',
            'type'=>'ciudad',
        ]);

        DB::table('destinations')->insert([
            'code'=>'40',
            'name'=>'Querétaro',
            'type'=>'ciudad',
        ]);

        DB::table('destinations')->insert([
            'code'=>'69',
            'name'=>'San Miguel de Allende',
            'type'=>'ciudad',
        ]);

        DB::table('destinations')->insert([
            'code'=>'41',
            'name'=>'Taxco',
            'type'=>'ciudad',
        ]);

        DB::table('destinations')->insert([
            'code'=>'113',
            'name'=>'Valle de Bravo',
            'type'=>'ciudad',
        ]);

        //internacional


        DB::table('destinations')->insert([
            'code'=>'15394',
            'name'=>'Las Vegas',
            'type'=>'internacional',
        ]);

        DB::table('destinations')->insert([
            'code'=>'16278',
            'name'=>'Miami',
            'type'=>'internacional',
        ]);

        DB::table('destinations')->insert([
            'code'=>'16929',
            'name'=>'Nueva York',
            'type'=>'internacional',
        ]);

        DB::table('destinations')->insert([
            'code'=>'17408',
            'name'=>'Orlando',
            'type'=>'internacional',
        ]);
         DB::table('campaign_destination')->insert([
            'campaign_id'=>'2',
            'destination_id'=>'21',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'2',
            'destination_id'=>'19',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'2',
            'destination_id'=>'13',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'2',
            'destination_id'=>'22',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'2',
            'destination_id'=>'23',
        ]);

////////////////////
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'3',
            'destination_id'=>'7',
        ]);

        DB::table('campaign_destination')->insert([
            'campaign_id'=>'3',
            'destination_id'=>'4',
        ]);

        DB::table('campaign_destination')->insert([
            'campaign_id'=>'3',
            'destination_id'=>'5',
        ]);

        DB::table('campaign_destination')->insert([
            'campaign_id'=>'3',
            'destination_id'=>'2',
        ]);

        DB::table('campaign_destination')->insert([
            'campaign_id'=>'3',
            'destination_id'=>'9',
        ]);

        DB::table('campaign_destination')->insert([
            'campaign_id'=>'3',
            'destination_id'=>'3',
        ]);

        DB::table('campaign_destination')->insert([
            'campaign_id'=>'3',
            'destination_id'=>'10',
        ]);

        DB::table('campaign_destination')->insert([
            'campaign_id'=>'3',
            'destination_id'=>'11',
        ]);

        //////////////////////////


        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'4',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'2',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'3',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'9',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'10',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'24',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'25',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'6',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'12',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'5',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'26',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'4',
            'destination_id'=>'27',
        ]);
/////////////////////////////////////
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'5',
            'destination_id'=>'1',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'5',
            'destination_id'=>'4',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'5',
            'destination_id'=>'3',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'5',
            'destination_id'=>'2',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'5',
            'destination_id'=>'13',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'5',
            'destination_id'=>'19',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'5',
            'destination_id'=>'20',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'5',
            'destination_id'=>'21',
        ]);

        /////////////////////////////

        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'3',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'10',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'6',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'11',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'4',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'1',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'7',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'3',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'19',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'17',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'16',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'13',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'20',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'21',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'22',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'6',
            'destination_id'=>'23',
        ]);





        DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'1',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'2',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'3',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'4',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'5',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'6',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'7',
        ]);
         DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'8',
        ]);
         DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'13',
        ]);
         DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'14',
        ]);
         DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'15',
        ]);
        DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'16',
        ]);
         DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'17',
        ]);
         DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'18',
        ]);
         DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'19',
        ]);
         DB::table('campaign_destination')->insert([
            'campaign_id'=>'1',
            'destination_id'=>'20',
        ]);

    }
}
