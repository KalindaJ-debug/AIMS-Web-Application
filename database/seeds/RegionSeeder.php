<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Region Id
        DB::table('regions')->insert([
            [ 
                'name' => 'Colombo',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Kollonnawa',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Kaduwella',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Homagama',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Hanwella',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Padukka',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Maharagama',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Sri Jayawardanapura Kotte',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Thimbirigasyaya',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Dehiwala-Mount Lavinia',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Ratmalana',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Moratuwa',
                'district_id' => '1' //Colombo
            ],
            [ 
                'name' => 'Kesbewa',
                'district_id' => '1' //Colombo
            ],
            [
                'name' => 'Meegamuwa',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Katana',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Divulapitiya',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Mirigama',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Minivangoda',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Wattale',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Ja-ela',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Gampaha',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Attanagalla',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Dompe',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Mahara',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Kelaniya',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Biyagama',
                'district_id' => '2' //Gamapaha
            ],
            [
                'name' => 'Panadura',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Bandaragama',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Horana',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Ingiriya',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Bulathsinhala',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Madurawala',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Millaniya',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Kalutara',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Beruwala',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Dodamgoda',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Matugama',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Agalawatte',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Palindanuwara',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Pallawita',
                'district_id' => '3' //Kalutara
            ],
            [
                'name' => 'Padavi Sri Pura',
                'district_id' => '4' //Trincomalee
            ],
            [
                'name' => 'Kuchchaveli',
                'district_id' => '4' //Trincomalee
            ],
            [
                'name' => 'Gomarankadawala',
                'district_id' => '4' //Trincomalee
            ],
            [
                'name' => 'Morawewa',
                'district_id' => '4' //Trincomalee
            ],
            [
                'name' => 'Trincomalee Town & Gravets',
                'district_id' => '4' //Trincomalee
            ],
            [
                'name' => 'Thamabalagamuwa',
                'district_id' => '4' //Trincomalee
            ],
            [
                'name' => 'Kantalei',
                'district_id' => '4' //Trincomalee
            ],
            [
                'name' => 'Kinniya',
                'district_id' => '4' //Trincomalee
            ],
            [
                'name' => 'Munttur',
                'district_id' => '4' //Trincomalee
            ],
            [
                'name' => 'Seruvila',
                'district_id' => '4' //Trincomalee
            ],
            [
                'name' => 'Verugal',
                'district_id' => '4' //Trincomalee
            ],
            [
                'name' => 'Koralai Pattu North',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Koralai Pattu West',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Koralai Pattu',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Eravur Pattu',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Eravur Town',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Manmunai North',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Manmunai West',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Katannakudi',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Manmunai Pattu',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Manmunai South-West',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Poravitu Pattu',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Manmunai South & Eravil Pattu',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Koralei Pattu South',
                'district_id' => '5' //Batticaloa
            ],
            [
                'name' => 'Dehiathkandiya',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Padiyathalawa',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Mahaoya',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Uhana',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Navanthtanvila',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Ampara',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Samanthurai',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Kalmunai',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Seinthamaratu',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Karathivu',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Nintavur',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Addalachchennai',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Eragama',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Akkaraipattu',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Alayadiwembu',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Damana',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Thirukkovil',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Potuvil',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Lahugala',
                'district_id' => '6' //Ampara
            ],
            [
                'name' => 'Sooriyawewa',
                'district_id' => '7' //Hambantota
            ],
            [
                'name' => 'Lunugamwehera',
                'district_id' => '7' //Hambantota
            ],
            [
                'name' => 'Thissamaharamaya',
                'district_id' => '7' //Hambantota
            ],
            [
                'name' => 'Hambantota',
                'district_id' => '7' //Hambantota
            ],
            [
                'name' => 'Ambalantota',
                'district_id' => '7' //Hambantota
            ],
            [
                'name' => 'Angulukolapalassa',
                'district_id' => '7' //Hambantota
            ],
            [
                'name' => 'Weerakatiya',
                'district_id' => '7' //Hambantota
            ],
            [
                'name' => 'Katuwana',
                'district_id' => '7' //Hambantota
            ],
            [
                'name' => 'Okewela',
                'district_id' => '7' //Hambantota
            ],
            [
                'name' => 'Beliatta',
                'district_id' => '7' //Hambantota
            ],
            [
                'name' => 'Tangalle',
                'district_id' => '7' //Hambantota
            ],
            [
                'name' => 'Pitabadda',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Kotapola',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Pasgoda',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Mulatiyana',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Athuruliya',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Akuressa',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Welipitiya',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Malimbada',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Kamburupitiya',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Hakmana',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Kirinda Puhulwella',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Thihagoda',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Weligama',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Matara Four Gravets',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Devinuwara',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Dickwella',
                'district_id' => '8' //Matara
            ],
            [
                'name' => 'Bentota',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Balapitiya',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Karandeniya',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Alpitiya',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Niyagama',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Thawalama',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Neluwa',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Nagoda',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Baddegama',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Weliwitiya-Divtura',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Ambalangoda',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Hikkaduwa',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Galle Four Gravets',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Bope-Poddala',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Akkmeemana',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Yakkalamulla',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Imaduwa',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Habaraduwa',
                'district_id' => '9' //Galle
            ],
            [
                'name' => 'Island North',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Velikamam West',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Velikamam South-West',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Velikamam North',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Velikamam South',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Velikamam East',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Vadamarachchi South-West',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Vadamarchchi East',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Vadamarchchi North',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Thenmaradchi',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Nallur',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Jaffna',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Island South',
                'district_id' => '10'  //Jaffna
            ],
            [
                'name' => 'Delft',
                'district_id' => '10'  //Jaffna
            ],
            [ 
                'name' => 'Pachchilaipalli',
                'district_id' => '11' //Killinochchi
            ],
            [ 
                'name' => 'Kandavalai',
                'district_id' => '11' //Killinochchi
            ],
            [ 
                'name' => 'Karachchi',
                'district_id' => '11' //Killinochchi
            ],
            [ 
                'name' => 'Poonakari',
                'district_id' => '11' //Killinochchi
            ],
            [
                'name' => 'Mannar Town',
                'district_id' => '12' //Mannar
            ],
            [
                'name' => 'Mannar West',
                'district_id' => '12' //Mannar
            ],
            [
                'name' => 'Maadhu',
                'district_id' => '12' //Mannar
            ],
            [
                'name' => 'Nanadhan',
                'district_id' => '12' //Mannar
            ],
            [
                'name' => 'Musalai',
                'district_id' => '12' //Mannar
            ],
            [
                'name' => 'Thunnukai',
                'district_id' => '13' //Mullathiavu
            ],
            [
                'name' => 'Manthai East',
                'district_id' => '13' //Mullathiavu
            ],
            [
                'name' => 'Puthukudiyirippu',
                'district_id' => '13' //Mullathiavu
            ],
            [
                'name' => 'Oddusudan',
                'district_id' => '13' //Mullathiavu
            ],
            [
                'name' => 'Maritimepattu',
                'district_id' => '13' //Mullathiavu
            ],
            [
                'name' => 'Vavuniya North',
                'district_id' => '14' //Vavuniya
            ],
            [
                'name' => 'vavuniya South',
                'district_id' => '14' //Vavuniya
            ],
            [
                'name' => 'Vavuniya',
                'district_id' => '14' //Vavuniya
            ],
            [
                'name' => 'Vengalecheddikulam',
                'district_id' => '14' //Vavuniya
            ],
            [
                'name' => 'Galewella',
                'district_id' => '15' //Matale
            ],
            [
                'name' => 'Dambulla',
                'district_id' => '15' //Matale
            ],
            [
                'name' => 'Naula',
                'district_id' => '15' //Matale
            ],
            [
                'name' => 'Pallepola',
                'district_id' => '15' //Matale
            ],
            [
                'name' => 'Yatawatte',
                'district_id' => '15' //Matale
            ],
            [
                'name' => 'Matale',
                'district_id' => '15' //Matale
            ],
            [
                'name' => 'Ambangange Korale',
                'district_id' => '15' //Matale
            ],
            [
                'name' => 'Laggala-Pallegama',
                'district_id' => '15' //Matale
            ],
            [
                'name' => 'Willgamuwa',
                'district_id' => '15' //Matale
            ],
            [
                'name' => 'Rattota',
                'district_id' => '15' //Matale
            ],
            [
                'name' => 'Ukuwela',
                'district_id' => '15' //Matale
            ],
            [
                'name' => 'Thumapane',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Poojapitiya',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Akurana',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Pathadumbara',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Panvila',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Ududambara',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Minipe',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Kundasalai',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Medadumbara',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Kandy Four Gravets & Gangawata Koralei',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Harispattuwa',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Yatigamuwa',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Hataraliyadda',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Udunuwara',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Doluwa',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Pahahewahata',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Delthota',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Udapalatha',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Ganga Ihara Koralei',
                'district_id' => '16' //Kandy
            ],
            [
                'name' => 'Kotmale',
                'district_id' => '17' //Nuwara Eliya
            ],
            [
                'name' => 'Hanguranketa',
                'district_id' => '17' //Nuwara Eliya
            ],
            [
                'name' => 'Nuwara Eliya',
                'district_id' => '17' //Nuwara Eliya
            ],
            [
                'name' => 'Walpane',
                'district_id' => '17' //Nuwara Eliya
            ],
            [
                'name' => 'Ambagamuwa',
                'district_id' => '17' //Nuwara Eliya
            ],
            [
                'name' => 'Mahiyangamaya',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Reedimaliyadda',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Meedahakivula',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Kandakatiya',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Soranathota',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Passara',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Lunugala',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Badulla',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Hali-ela',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Uva-Paranagama',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Welimada',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Bandarawela',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Ella',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Haputhale',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Haldummulla',
                'district_id' => '18' //Badulla
            ],
            [
                'name' => 'Bibile',
                'district_id' => '19' //Monaragala
            ],
            [
                'name' => 'Madulla',
                'district_id' => '19' //Monaragala
            ],
            [
                'name' => 'Madagama',
                'district_id' => '19' //Monaragala
            ],
            [
                'name' => 'Monaragama',
                'district_id' => '19' //Monaragala
            ],
            [
                'name' => 'Siyambalanduwa',
                'district_id' => '19' //Monaragala
            ],
            [
                'name' => 'Kataragama',
                'district_id' => '19' //Monaragala
            ],
            [
                'name' => 'Badalkumbura',
                'district_id' => '19' //Monaragala
            ],
            [
                'name' => 'Wellawaya',
                'district_id' => '19' //Monaragala
            ],
            [
                'name' => 'Buttala',
                'district_id' => '19' //Monaragala
            ],
            [
                'name' => 'Thanamanvila',
                'district_id' => '19' //Monaragala
            ],
            [
                'name' => 'Sevanagalla',
                'district_id' => '19' //Monaragala
            ],
            [
                'name' => 'Kegalle',
                'district_id' => '20' //Kegalle
            ],
            [
                'name' => 'Rambukkana',
                'district_id' => '20' //Kegalle
            ],
            [
                'name' => 'Mavanella',
                'district_id' => '20' //Kegalle
            ],
            [
                'name' => 'Aranayaka',
                'district_id' => '20' //Kegalle
            ],
            [
                'name' => 'Galigamuwa',
                'district_id' => '20' //Kegalle
            ],
            [
                'name' => 'Warakapola',
                'district_id' => '20' //Kegalle
            ],
            [
                'name' => 'Ruwanwella',
                'district_id' => '20' //Kegalle
            ],
            [
                'name' => 'Bulathkohupitiya',
                'district_id' => '20' //Kegalle
            ],
            [
                'name' => 'Yatiyanthota',
                'district_id' => '20' //Kegalle
            ],
            [
                'name' => 'Dehiovita',
                'district_id' => '20' //Kegalle
            ],
            [
                'name' => 'Deraniyagalla',
                'district_id' => '20' //Kegalle
            ],
            [
                'name' => 'Eheliyagoda',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Kuruvita',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Kiriella',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Ratnapura',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Imbulpe',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Balangoda',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Opanayake',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Palmadulla',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Elpatha',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Ayagama',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Kalwana',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Nivitigala',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Kahawatta',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Godakawela',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Weligampola',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Ambilipitiya',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Kollonna',
                'district_id' => '21' //Ratnapura
            ],
            [
                'name' => 'Kalpitiya',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Vantavilluwa',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Karuwalagaswewa',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Navagatthegama',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Puttalam',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Mundalama',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Mahakumbukkadawala',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Anamaduwa',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Pallama',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Arrachchikattuwa',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Halawata',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Madampe',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Mahawewa',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Nattandiya',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Wennappuwa',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Dankotuwa',
                'district_id' => '22' //Puttalam
            ],
            [
                'name' => 'Kurunagela',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Giribawa',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Galgamuwa',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Ehetuwawe',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Ambanpola',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Kotawehera',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Rasnayakapura',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Nikaweratiya',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Mahawa',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Polpitigama',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Ibbagamuwa',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Ganewatta',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Wariyapola',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Ganewatta',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Kobeigane',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Bingiriya',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Paduwasnuwara',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Kadupotha',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Bamunkotuwa',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Maspotha',
                'district_id' => '23' //Kurunegala
            ],
            [
                'name' => 'Padaviya',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Kabathigollawa',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Madavachchiya',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Mahavilachchiya',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Nuwaragama Palatha Central',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Rambawe',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Kahatagasdiliya',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Horewpathana',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Galenbendunuwewa',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Mihinthale',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Nuwaragama Palatha East',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Nachchaduwa',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Nochchiyagama',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Ranjangamaya',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Thambuttegama',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Thalawa',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Thirippane',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Kekirawa',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Palugaswewa',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Ipalogama',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Galnawa',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Palagala',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Welioya',
                'district_id' => '24' //Anuradapura
            ],
            [
                'name' => 'Hingurakkoda',
                'district_id' => '25' //Polonnaruwa
            ],
            [
                'name' => 'Madirigiriya',
                'district_id' => '25' //Polonnaruwa
            ],
            [
                'name' => 'Lankapura',
                'district_id' => '25' //Polonnaruwa
            ],
            [
                'name' => 'Welikanda',
                'district_id' => '25' //Polonnaruwa
            ],
            [
                'name' => 'Dimbulagala',
                'district_id' => '25' //Polonnaruwa
            ],
            [
                'name' => 'Thamankaduwa',
                'district_id' => '25' //Polonnaruwa
            ],
            [
                'name' => 'Elahera',
                'district_id' => '25' //Polonnaruwa
            ]
        ]);
    }
}
