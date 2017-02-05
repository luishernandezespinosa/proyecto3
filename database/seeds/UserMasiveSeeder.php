<?php

use App\User;
use Illuminate\Database\Seeder;


class UserMasiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        for ($i=1; $i<=100; $i++) {
            User::create([
//se puede hacer con for y añadir la variable $i
            //mejor con librería faker

                'firstname' => 'Pepe' . $i,
                'lastname' => 'Pérez'.$i,
                'password' => bcrypt(123),
                'email' => "pepe$i@pepe.es",
                'rol' =>    'AlumnoFP',
                'token' => bcrypt(date('YmdHms') + $i )

            ]);
        }
*///con es_ES nos crea nombres aleatorios en español

        //mejor con librería faker
        /*
        $faker = Faker\Factory::create('es_ES');

        for ($i=1; $i<=100; $i++) {


           // User::create([
            //Se puede hacer con User:create

            //para coger la clave foranea necesito esto y lo uso abajo

            $id = DB::table('users')->insertGetId([


                'firstname' => $faker->firstName(),
                'lastname' => $faker->lastName(),
                'password' => bcrypt(123),
                'email' => $faker->unique()->email,
                'rol' =>    $faker->randomElement([
                                    'Profesor',
                                    'AlumnoESO',
                                    'AlumnoBach',
                                    'AlumnoFP']),

                'token' => bcrypt(date('YmdHms'))

            ]);

            DB::table('users_profiles')->insert([
               'user_id' => $id,
                'biograph' => $faker->paragraph(rand(2,5)),
                'website' => 'http://www.' . $faker->domainName,
                'twitter' => 'http://www.twitter.com' . $faker->userName,
                'birthdate' => $faker->dateTimeBetween('-45 years',
                                                    '-15 years')
                                                    ->format('Y-m-d')
            ]);
        }
*/

    }
}
