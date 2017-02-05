<?php

use Illuminate\Database\Seeder;
use App\User;

class UserAlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //2ª forma de crear usuario con facades

        // lo comentamostodo porque está n UserConFactorySeeder.php
/*



        User::create([
            'firstname' => 'pepe',
            'lastname' => 'perez',
            'password' => bcrypt(123),
            'email' => 'pepe@pepe.es',
            'rol' =>    'AlumnoFP',
            'token' => bcrypt(date('YmdHms'))
        ]);

        //3ª forma de crar usuario, con la clase db
        //consulta a bajo nivel, sin Eloquent, sin ORM
        //maneja directamente PDO
        //vale para hacer having, left join, ...

        DB::table('users')->insert([
            'firstname' => 'Juan',
            'lastname' => 'perez',
            'password' => bcrypt(123),
            'email' => 'juan@juan.es',
            'rol' =>    'AlumnoESO',
            'token' => bcrypt(date('YmdHms'))
        ]);
*/
    }



}
